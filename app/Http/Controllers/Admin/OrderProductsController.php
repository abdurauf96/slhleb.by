<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\OrderProduct;
use Illuminate\Http\Request;

class OrderProductsController extends Controller
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
            $orderproducts = OrderProduct::where('name', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('phone', 'LIKE', "%$keyword%")
                ->orWhere('company', 'LIKE', "%$keyword%")
                ->orWhere('msg', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $orderproducts = OrderProduct::latest()->paginate($perPage);
        }

        return view('admin.order-products.index', compact('orderproducts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.order-products.create');
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
        
        OrderProduct::create($requestData);

        return redirect('admin/order-products')->with('flash_message', 'OrderProduct added!');
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
        $orderproduct = OrderProduct::findOrFail($id);

        return view('admin.order-products.show', compact('orderproduct'));
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
        $orderproduct = OrderProduct::findOrFail($id);

        return view('admin.order-products.edit', compact('orderproduct'));
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
        
        $orderproduct = OrderProduct::findOrFail($id);
        $orderproduct->update($requestData);

        return redirect('admin/order-products')->with('flash_message', 'OrderProduct updated!');
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
        OrderProduct::destroy($id);

        return redirect('admin/order-products')->with('flash_message', 'OrderProduct deleted!');
    }
}
