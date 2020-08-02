<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Slider;
use Illuminate\Http\Request;

class SlidersController extends Controller
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
            $sliders = Slider::where('title_ru', 'LIKE', "%$keyword%")
                ->orWhere('title_by', 'LIKE', "%$keyword%")
                ->orWhere('title_en', 'LIKE', "%$keyword%")
                ->orWhere('image_fon', 'LIKE', "%$keyword%")
                ->orWhere('image_effekt', 'LIKE', "%$keyword%")
                ->orWhere('desc_ru', 'LIKE', "%$keyword%")
                ->orWhere('desc_by', 'LIKE', "%$keyword%")
                ->orWhere('desc_en', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $sliders = Slider::latest()->paginate($perPage);
        }

        return view('admin.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.sliders.create');
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
        if($request->hasFile('image_fon')){
            $file=$request->file('image_fon');
            $image_fon=time().$file->getClientOriginalName();
            $file->move('images/sliders', $image_fon);
            $requestData['image_fon']=$image_fon;
        }
        if($request->hasFile('image_effekt')){
            $file=$request->file('image_effekt');
            $image_effekt=time().$file->getClientOriginalName();
            $file->move('images/sliders', $image_effekt);
            $requestData['image_effekt']=$image_effekt;
        }
        Slider::create($requestData);

        return redirect('admin/sliders')->with('flash_message', 'Slider added!');
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
        $slider = Slider::findOrFail($id);

        return view('admin.sliders.show', compact('slider'));
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
        $slider = Slider::findOrFail($id);

        return view('admin.sliders.edit', compact('slider'));
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
        if($request->hasFile('image_fon')){
            $file=$request->file('image_fon');
            $image_fon=time().$file->getClientOriginalName();
            $file->move('images/sliders', $image_fon);
            $requestData['image_fon']=$image_fon;
        }
        if($request->hasFile('image_effekt')){
            $file=$request->file('image_effekt');
            $image_effekt=time().$file->getClientOriginalName();
            $file->move('images/sliders', $image_effekt);
            $requestData['image_effekt']=$image_effekt;
        }
        $slider = Slider::findOrFail($id);
        $slider->update($requestData);

        return redirect('admin/sliders')->with('flash_message', 'Slider updated!');
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
        Slider::destroy($id);

        return redirect('admin/sliders')->with('flash_message', 'Slider deleted!');
    }
}
