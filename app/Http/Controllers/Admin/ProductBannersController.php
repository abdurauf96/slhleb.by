<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ProductBanner;
use Illuminate\Http\Request;

class ProductBannersController extends Controller
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
            $productbanners = ProductBanner::where('image', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $productbanners = ProductBanner::latest()->paginate($perPage);
        }

        return view('admin.product-banners.index', compact('productbanners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.product-banners.create');
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
            $file->move('images/productbanners', $image);
            $requestData['image']=$image;
        }
        ProductBanner::create($requestData);

        return redirect('admin/product-banners')->with('flash_message', 'ProductBanner added!');
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
        $productbanner = ProductBanner::findOrFail($id);

        return view('admin.product-banners.show', compact('productbanner'));
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
        $productbanner = ProductBanner::findOrFail($id);

        return view('admin.product-banners.edit', compact('productbanner'));
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
        
        $productbanner = ProductBanner::findOrFail($id);
        if ($request->hasFile('image')) {
            $file=$request->file('image');
            $image=time().$file->getClientOriginalName();
            $file->move('images/productbanners', $image);
            $requestData['image']=$image;
        }
        $productbanner->update($requestData);

        return redirect('admin/product-banners')->with('flash_message', 'ProductBanner updated!');
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
        ProductBanner::destroy($id);

        return redirect('admin/product-banners')->with('flash_message', 'ProductBanner deleted!');
    }
}
