<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Tag;
use App\Recipe;
use App\MealStep;
use Illuminate\Http\Request;

class RecipesController extends Controller
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
            $recipes = Recipe::where('tag_id', 'LIKE', "%$keyword%")
                ->orWhere('name_ru', 'LIKE', "%$keyword%")
                ->orWhere('name_by', 'LIKE', "%$keyword%")
                ->orWhere('name_en', 'LIKE', "%$keyword%")
                ->orWhere('consist_ru', 'LIKE', "%$keyword%")
                ->orWhere('consist_by', 'LIKE', "%$keyword%")
                ->orWhere('consist_en', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $recipes = Recipe::latest()->paginate($perPage);
        }

        return view('admin.recipes.index', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $tags=Tag::all();
        return view('admin.recipes.create', compact('tags'));
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
            $file->move('images/recipes', $image);
            $requestData['image']=$image;
        }
        $recipe=Recipe::create($requestData);
        $action='save';
        return view('admin.recipes.add-steps')->with(compact('recipe', 'action'))->with('flash_message', 'Recipe added!');
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
        $recipe = Recipe::findOrFail($id);

        return view('admin.recipes.show', compact('recipe'));
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
        $recipe = Recipe::findOrFail($id);
        $tags=Tag::all();
        return view('admin.recipes.edit', compact('recipe', 'tags'));
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
            $file->move('images/recipes', $image);
            $requestData['image']=$image;
        }
        $recipe = Recipe::findOrFail($id);
        $recipe->update($requestData);
        $action='update';
        return view('admin.recipes.add-steps')->with(compact('recipe', 'action'));
        //return redirect('admin/recipes')->with('flash_message', 'Recipe updated!');
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
        Recipe::destroy($id);

        return redirect('admin/recipes')->with('flash_message', 'Recipe deleted!');
    }

    //routes for Meal Steps

    public function saveStep(Request $request)
    {
       
        for ($i=0; $i <count($request->title_ru) ; $i++) { 
            
            $data=[
                'title_ru'=>$request->title_ru[$i],
                'title_by'=>$request->title_by[$i],
                'title_en'=>$request->title_en[$i],
                'recipe_id'=>$request->recipe_id[$i],
            ];
            
            if (isset($request->images)) {
                $file=$request->images[$i];
                $image=time().$file->getClientOriginalName();
                $file->move('images/recipes/steps', $image);
                $data['image']=$image;
            }     
            MealStep::create($data);
        }
        return redirect('admin/recipes');
    }

    public function updateStep(Request $request)
    {
       
        for ($i=0; $i <count($request->title_ru) ; $i++) { 
            
            $data=[
                'title_ru'=>$request->title_ru[$i],
                'title_by'=>$request->title_by[$i],
                'title_en'=>$request->title_en[$i],
                'recipe_id'=>$request->recipe_id[$i],
            ];
            
            if (isset($request->images[$i])) {
                $file=$request->images[$i];
                $image=time().$file->getClientOriginalName();
                $file->move('images/recipes/steps', $image);
                $data['image']=$image;
            }
            
            if(empty($request->step_id[$i])){
                MealStep::create($data);
            }else{
                MealStep::find($request->step_id[$i])->update($data);
            }
            
        }
        return redirect('admin/recipes');
    }

    public function deleteStep(Request $request)
    {
        MealStep::destroy($request->step_id);
    }
}
