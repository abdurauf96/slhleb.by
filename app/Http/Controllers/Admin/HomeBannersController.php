<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\HomeBanner;
use Illuminate\Http\Request;

class HomeBannersController extends Controller
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
            $homebanners = HomeBanner::where('title_ru', 'LIKE', "%$keyword%")
                ->orWhere('title_by', 'LIKE', "%$keyword%")
                ->orWhere('title_en', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->orWhere('type', 'LIKE', "%$keyword%")
                ->orWhere('url', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $homebanners = HomeBanner::latest()->paginate($perPage);
        }

        return view('admin.home-banners.index', compact('homebanners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.home-banners.create');
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
            $file->move('images/homebanners', $image);
            $requestData['image']=$image;
        }
        HomeBanner::create($requestData);

        return redirect('admin/home-banners')->with('flash_message', 'HomeBanner added!');
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
        $homebanner = HomeBanner::findOrFail($id);

        return view('admin.home-banners.show', compact('homebanner'));
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
        $homebanner = HomeBanner::findOrFail($id);

        return view('admin.home-banners.edit', compact('homebanner'));
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
        
        $homebanner = HomeBanner::findOrFail($id);
        if($request->hasFile('image')){
            $file=$request->file('image');
            $image=time().$file->getClientOriginalName();
            $file->move('images/homebanners', $image);
            $requestData['image']=$image;
        }
        $homebanner->update($requestData);

        return redirect('admin/home-banners')->with('flash_message', 'HomeBanner updated!');
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
        HomeBanner::destroy($id);

        return redirect('admin/home-banners')->with('flash_message', 'HomeBanner deleted!');
    }
}
