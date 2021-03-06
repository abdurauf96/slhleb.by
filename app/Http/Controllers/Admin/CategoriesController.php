<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $categories = Category::where('name', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->orWhere('icon', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $categories = Category::latest()->paginate($perPage);
        }

        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.categories.create');
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
        

        if ($request->hasFile('icon')) {
            $file=$request->file('icon');
            $icon=time().$file->getClientOriginalName();
            $file->move('images/categories', $icon);
        }else{
            $icon=null;
        }
        if ($request->hasFile('image')) {
            $file=$request->file('image');
            $image=time().$file->getClientOriginalName();
            $file->move('images/categories', $image);
        }else{
            $image=null;
        }

        
        $data=[
            'icon'=>$icon,
            'image'=>$image,
            'meta_title'=>$request->meta_title,
            'meta_description'=>$request->meta_description,
            'slug'=>$request->slug,
            'ru'=>[ 'name'=>$request->ru_name, 'description'=>$request->ru_description ],
            'en'=>[ 'name'=>$request->en_name, 'description'=>$request->en_description ],
            'by'=>[ 'name'=>$request->by_name, 'description'=>$request->by_description ],
        ];
        Category::create($data);

    
        return redirect('admin/categories')->with('flash_message', 'Category added!');
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
        $category = Category::findOrFail($id);

        return view('admin.categories.show', compact('category'));
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
        $category = Category::findOrFail($id);

        return view('admin.categories.edit', compact('category'));
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
        
 
        $category = Category::findOrFail($id);
        if ($request->hasFile('new_icon')) {
            $file=$request->file('new_icon');
            $icon=time().$file->getClientOriginalName();
            $file->move('images/categories', $icon);
        }else{
            $icon=$request->last_icon;
        }
        if ($request->hasFile('new_image')) {
            $file=$request->file('new_image');
            $image=time().$file->getClientOriginalName();
            $file->move('images/categories', $image);
        }else{
            $image=$request->last_image;
        }

        $data=[
            'icon'=>$icon,
            'image'=>$image,
            'meta_title'=>$request->meta_title,
            'meta_description'=>$request->meta_description,
            'slug'=>$request->slug,
            'ru'=>[ 'name'=>$request->ru_name, 'description'=>$request->ru_description ],
            'en'=>[ 'name'=>$request->en_name, 'description'=>$request->en_description ],
            'by'=>[ 'name'=>$request->by_name, 'description'=>$request->by_description ],
        ];
        
        $category->update($data);

        return redirect('admin/categories')->with('flash_message', 'Category updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Category $category)
    {
        $category=Category::findOrFail($id);
        $category->products()->delete();
        $category->filters()->delete();
        $category->delete();

        return redirect('admin/categories')->with('flash_message', 'Category deleted!');
    }
}
