<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\QuizCategory;
use Illuminate\Http\Request;

class QuizCategoriesController extends Controller
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
            $quizcategories = QuizCategory::where('name', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $quizcategories = QuizCategory::latest()->paginate($perPage);
        }

        return view('admin.quiz-categories.index', compact('quizcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.quiz-categories.create');
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
        
        QuizCategory::create($requestData);

        return redirect('admin/quiz-categories')->with('flash_message', 'QuizCategory added!');
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
        $quizcategory = QuizCategory::findOrFail($id);

        return view('admin.quiz-categories.show', compact('quizcategory'));
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
        $quizcategory = QuizCategory::findOrFail($id);

        return view('admin.quiz-categories.edit', compact('quizcategory'));
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
        
        $quizcategory = QuizCategory::findOrFail($id);
        $quizcategory->update($requestData);

        return redirect('admin/quiz-categories')->with('flash_message', 'QuizCategory updated!');
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
        QuizCategory::destroy($id);

        return redirect('admin/quiz-categories')->with('flash_message', 'QuizCategory deleted!');
    }
}
