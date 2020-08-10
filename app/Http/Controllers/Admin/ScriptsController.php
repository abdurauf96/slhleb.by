<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Script;
use Illuminate\Http\Request;

class ScriptsController extends Controller
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
            $scripts = Script::where('name_ru', 'LIKE', "%$keyword%")
                ->orWhere('name_by', 'LIKE', "%$keyword%")
                ->orWhere('name_en', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $scripts = Script::latest()->paginate($perPage);
        }

        return view('admin.scripts.index', compact('scripts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.scripts.create');
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
        
        Script::create($requestData);

        return redirect('admin/scripts')->with('flash_message', 'Script added!');
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
        $script = Script::findOrFail($id);

        return view('admin.scripts.show', compact('script'));
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
        $script = Script::findOrFail($id);

        return view('admin.scripts.edit', compact('script'));
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
        
        $script = Script::findOrFail($id);
        $script->update($requestData);

        return redirect('admin/scripts')->with('flash_message', 'Script updated!');
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
        $script=Script::findOrFail($id);
        $script->holidays()->delete();
        Script::destroy($id);

        return redirect('admin/scripts')->with('flash_message', 'Script deleted!');
    }
}
