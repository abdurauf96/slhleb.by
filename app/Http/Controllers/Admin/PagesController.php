<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');

        if (!empty($keyword)) {
            $pages = Page::where('title_ru', 'LIKE', "%$keyword%")
                ->orWhere('title_by', 'LIKE', "%$keyword%")
                ->orWhere('title_en', 'LIKE', "%$keyword%")
                ->orWhere('desc_ru', 'LIKE', "%$keyword%")
                ->orWhere('desc_by', 'LIKE', "%$keyword%")
                ->orWhere('desc_en', 'LIKE', "%$keyword%")
                ->orWhere('content_ru', 'LIKE', "%$keyword%")
                ->orWhere('content_by', 'LIKE', "%$keyword%")
                ->orWhere('content_en', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->orWhere('key', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $pages = Page::latest()->get();
        }

        return view('admin.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        if($request->hasFile('image')){
            $file=$request->file('image');
            $image=time().$file->getClientOriginalName();
            $file->move('images/pages', $image);
        }else{
            $image=null;
        }
        $requestData['image']=$image;

        $page=Page::create($requestData);

        if($requestData['type']=='default'){
            return redirect('admin/pages')->with('flash_message', 'Page added!');
        }else{
            return redirect('admin/pages/'.$page->id.'/add-elements')->with('flash_message', 'Page added!');
        }

    }


    public function addElements($id)
    {
        $page=Page::find($id);
        return view('admin/pages/add-element', compact('page'));
    }

    public function saveElements(Request $request, $id)
    {
        $page=Page::find($id);
        
        //dd($request->all());
        for ($i=0; $i<count($request->title_ru) ; $i++) { 
            
            $data=[
                'title_ru'=>$request->title_ru[$i],
                'title_by'=>$request->title_by[$i],
                'title_en'=>$request->title_en[$i],
                'tag_ru'=>$request->tag_ru[$i],
                'tag_by'=>$request->tag_by[$i],
                'tag_en'=>$request->tag_en[$i],
                'content_ru'=>$request->content_ru[$i],
                'content_by'=>$request->content_by[$i],
                'content_en'=>$request->content_en[$i],
                'slug'=>\Str::slug($request->title_ru[$i]),
            ];
            if(isset($request->images[$i])){
                $file=$request->images[$i];
                $image=time().$file->getClientOriginalName();
                $file->move('images/pages/elements', $image);
                $data['image']=$image;
            }


            if(empty($request->element_id[$i])){
                $page->elements()->create($data);
            }else{
                \App\Element::find($request->element_id[$i])->update($data);
            }
            

        }
        
        return redirect('admin/pages')->with('flash_message', 'Page added!');
    }

    public function deleteElements(Request $request)
    {
        \App\Element::destroy($request->element_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $page = Page::findOrFail($id);

        return view('admin.pages.show', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $page = Page::findOrFail($id);

        return view('admin.pages.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        if($request->hasFile('image')){
            $file=$request->file('image');
            $image=time().$file->getClientOriginalName();
            $file->move('images/pages', $image);
            $requestData['image']=$image;
        }
        
        $page = Page::findOrFail($id);
        $page->update($requestData);

        if($page->type=='default'){
            return redirect('admin/pages')->with('flash_message', 'Page updated!');
        }else{
            return redirect('admin/pages/'.$page->id.'/add-elements')->with(compact('page'));
        }

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $page=Page::findOrFail($id);
        $page->elements()->delete();
        Page::destroy($id);
        return redirect('admin/pages')->with('flash_message', 'Page deleted!');
    }
}
