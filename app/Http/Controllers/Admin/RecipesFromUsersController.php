<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\RecipesFromUser;
use Illuminate\Http\Request;

class RecipesFromUsersController extends Controller
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
            $recipesfromusers = RecipesFromUser::where('name', 'LIKE', "%$keyword%")
                ->orWhere('phone', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('msg', 'LIKE', "%$keyword%")
                ->orWhere('file', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $recipesfromusers = RecipesFromUser::latest()->paginate($perPage);
        }

        return view('admin.recipes-from-users.index', compact('recipesfromusers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.recipes-from-users.create');
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
        
        RecipesFromUser::create($requestData);

        return redirect('admin/recipes-from-users')->with('flash_message', 'RecipesFromUser added!');
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
        $recipesfromuser = RecipesFromUser::findOrFail($id);

        return view('admin.recipes-from-users.show', compact('recipesfromuser'));
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
        $recipesfromuser = RecipesFromUser::findOrFail($id);

        return view('admin.recipes-from-users.edit', compact('recipesfromuser'));
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
        
        $recipesfromuser = RecipesFromUser::findOrFail($id);
        $recipesfromuser->update($requestData);

        return redirect('admin/recipes-from-users')->with('flash_message', 'RecipesFromUser updated!');
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
        RecipesFromUser::destroy($id);

        return redirect('admin/recipes-from-users')->with('flash_message', 'RecipesFromUser deleted!');
    }
}
