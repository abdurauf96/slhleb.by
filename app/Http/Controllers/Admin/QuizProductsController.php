<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\QuizProduct;
use Illuminate\Http\Request;

class QuizProductsController extends Controller
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
            $quizproducts = QuizProduct::where('name', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->orWhere('weight', 'LIKE', "%$keyword%")
                ->orWhere('quiz_category_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $quizproducts = QuizProduct::latest()->paginate($perPage);
        }

        return view('admin.quiz-products.index', compact('quizproducts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $categories=\App\QuizCategory::all();
        return view('admin.quiz-products.create', compact('categories'));
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
            $file->move('images/quizproducts', $image);
            $requestData['image']=$image;
        }
        QuizProduct::create($requestData);

        return redirect('admin/quiz-products')->with('flash_message', 'QuizProduct added!');
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
        $quizproduct = QuizProduct::findOrFail($id);

        return view('admin.quiz-products.show', compact('quizproduct'));
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
        $quizproduct = QuizProduct::findOrFail($id);
        $categories=\App\QuizCategory::all();
        return view('admin.quiz-products.edit', compact('quizproduct', 'categories'));
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
            $file->move('images/quizproducts', $image);
            $requestData['image']=$image;
        }
        $quizproduct = QuizProduct::findOrFail($id);
        $quizproduct->update($requestData);

        return redirect('admin/quiz-products')->with('flash_message', 'QuizProduct updated!');
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
        QuizProduct::destroy($id);

        return redirect('admin/quiz-products')->with('flash_message', 'QuizProduct deleted!');
    }
}
