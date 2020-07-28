<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\AboutCity;
use Illuminate\Http\Request;

class AboutCitiesController extends Controller
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
            $aboutcities = AboutCity::where('title_ru', 'LIKE', "%$keyword%")
                ->orWhere('title_by', 'LIKE', "%$keyword%")
                ->orWhere('title_en', 'LIKE', "%$keyword%")
                ->orWhere('body_ru', 'LIKE', "%$keyword%")
                ->orWhere('body_by', 'LIKE', "%$keyword%")
                ->orWhere('body_en', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->orWhere('key', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $aboutcities = AboutCity::latest()->paginate($perPage);
        }

        return view('admin.about-cities.index', compact('aboutcities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.about-cities.create');
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
        if ($request->hasFile('image')) {
            $file=$request->file('image');
            $image=time().$file->getClientOriginalName();
            $file->move('images/about', $image);
            $requestData['image']=$image;
        }
        AboutCity::create($requestData);

        return redirect('admin/about-cities')->with('flash_message', 'AboutCity added!');
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
        $aboutcity = AboutCity::findOrFail($id);

        return view('admin.about-cities.show', compact('aboutcity'));
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
        $aboutcity = AboutCity::findOrFail($id);

        return view('admin.about-cities.edit', compact('aboutcity'));
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
        if ($request->hasFile('image')) {
            $file=$request->file('image');
            $image=time().$file->getClientOriginalName();
            $file->move('images/about', $image);
            $requestData['image']=$image;
        }
        $aboutcity = AboutCity::findOrFail($id);
        $aboutcity->update($requestData);

        return redirect('admin/about-cities')->with('flash_message', 'AboutCity updated!');
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
        AboutCity::destroy($id);

        return redirect('admin/about-cities')->with('flash_message', 'AboutCity deleted!');
    }
}
