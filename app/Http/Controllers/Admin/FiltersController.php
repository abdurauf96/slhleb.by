<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Filter;
use App\Category;
use Illuminate\Http\Request;

class FiltersController extends Controller
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
            $filters = Filter::where('category_id', 'LIKE', "%$keyword%")
                ->orWhere('name', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $filters = Filter::latest()->paginate($perPage);
        }

        return view('admin.filters.index', compact('filters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $categories=Category::all();
        return view('admin.filters.create', compact('categories'));
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
        
        $requestData = [
            'ru'=>[ 'name' => $request->ru_name ],
            'by'=>[ 'name'=> $request->by_name],
            'en'=>[ 'name'=> $request->en_name],
            'category_id'=>$request->category_id,
        ];
        
        Filter::create($request->all());

        return redirect('admin/filters')->with('flash_message', 'Filter added!');
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
        $filter = Filter::findOrFail($id);

        return view('admin.filters.show', compact('filter'));
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
        $filter = Filter::findOrFail($id);
        $categories=Category::all();

        return view('admin.filters.edit', compact('filter', 'categories'));
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
        
        $filter = Filter::findOrFail($id);
        $filter->update($requestData);

        return redirect('admin/filters')->with('flash_message', 'Filter updated!');
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
        $filter=Filter::findOrFail($id);
        $filter->products()->delete();
        Filter::destroy($id);

        return redirect('admin/filters')->with('flash_message', 'Filter deleted!');
    }
}
