<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Holiday;
use App\Script;
use Illuminate\Http\Request;

class HolidaysController extends Controller
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
            $holidays = Holiday::where('script_id', 'LIKE', "%$keyword%")
                ->orWhere('title_ru', 'LIKE', "%$keyword%")
                ->orWhere('title_by', 'LIKE', "%$keyword%")
                ->orWhere('title_en', 'LIKE', "%$keyword%")
                ->orWhere('body_ru', 'LIKE', "%$keyword%")
                ->orWhere('body_by', 'LIKE', "%$keyword%")
                ->orWhere('body_en', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $holidays = Holiday::latest()->paginate($perPage);
        }

        return view('admin.holidays.index', compact('holidays'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $scripts=Script::all();
        return view('admin.holidays.create', compact('scripts'));
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
            $file->move('images/holidays', $image);
            $requestData['image']=$image;
        }
        
        Holiday::create($requestData);

        return redirect('admin/holidays')->with('flash_message', 'Holiday added!');
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
        $holiday = Holiday::findOrFail($id);

        return view('admin.holidays.show', compact('holiday'));
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
        $holiday = Holiday::findOrFail($id);
        $scripts=Script::all();
        return view('admin.holidays.edit', compact('holiday', 'scripts'));
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
            $file->move('images/holidays', $image);
            $requestData['image']=$image;
        }
        $holiday = Holiday::findOrFail($id);
        $holiday->update($requestData);

        return redirect('admin/holidays')->with('flash_message', 'Holiday updated!');
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
        Holiday::destroy($id);

        return redirect('admin/holidays')->with('flash_message', 'Holiday deleted!');
    }
}
