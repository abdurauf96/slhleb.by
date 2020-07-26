<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\StoryCategory;
use Illuminate\Http\Request;

class StoryCategoriesController extends Controller
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
            $storycategories = StoryCategory::where('name_ru', 'LIKE', "%$keyword%")
                ->orWhere('name_by', 'LIKE', "%$keyword%")
                ->orWhere('name_en', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $storycategories = StoryCategory::latest()->paginate($perPage);
        }

        return view('admin.story-categories.index', compact('storycategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.story-categories.create');
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
        
        StoryCategory::create($requestData);

        return redirect('admin/story-categories')->with('flash_message', 'StoryCategory added!');
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
        $storycategory = StoryCategory::findOrFail($id);

        return view('admin.story-categories.show', compact('storycategory'));
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
        $storycategory = StoryCategory::findOrFail($id);

        return view('admin.story-categories.edit', compact('storycategory'));
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
        
        $storycategory = StoryCategory::findOrFail($id);
        $storycategory->update($requestData);

        return redirect('admin/story-categories')->with('flash_message', 'StoryCategory updated!');
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
        StoryCategory::destroy($id);

        return redirect('admin/story-categories')->with('flash_message', 'StoryCategory deleted!');
    }
}
