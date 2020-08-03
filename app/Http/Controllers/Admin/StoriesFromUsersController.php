<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\StoriesFromUser;
use Illuminate\Http\Request;

class StoriesFromUsersController extends Controller
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
            $storiesfromusers = StoriesFromUser::where('name', 'LIKE', "%$keyword%")
                ->orWhere('phone', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('msg', 'LIKE', "%$keyword%")
                ->orWhere('file', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $storiesfromusers = StoriesFromUser::latest()->paginate($perPage);
        }

        return view('admin.stories-from-users.index', compact('storiesfromusers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.stories-from-users.create');
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
        
        StoriesFromUser::create($requestData);

        return redirect('admin/stories-from-users')->with('flash_message', 'StoriesFromUser added!');
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
        $storiesfromuser = StoriesFromUser::findOrFail($id);

        return view('admin.stories-from-users.show', compact('storiesfromuser'));
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
        $storiesfromuser = StoriesFromUser::findOrFail($id);

        return view('admin.stories-from-users.edit', compact('storiesfromuser'));
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
        
        $storiesfromuser = StoriesFromUser::findOrFail($id);
        $storiesfromuser->update($requestData);

        return redirect('admin/stories-from-users')->with('flash_message', 'StoriesFromUser updated!');
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
        StoriesFromUser::destroy($id);

        return redirect('admin/stories-from-users')->with('flash_message', 'StoriesFromUser deleted!');
    }
}
