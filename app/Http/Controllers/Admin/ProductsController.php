<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Product;
use App\Category;
use App\Filter;
use App\ProductAttribute;
use Illuminate\Http\Request;

class ProductsController extends Controller
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
            $products = Product::where('category_id', 'LIKE', "%$keyword%")
                ->orWhere('filter_id', 'LIKE', "%$keyword%")
                ->orWhere('name', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->orWhere('about', 'LIKE', "%$keyword%")
                ->orWhere('consist', 'LIKE', "%$keyword%")
                ->orWhere('protein', 'LIKE', "%$keyword%")
                ->orWhere('carbo', 'LIKE', "%$keyword%")
                ->orWhere('fat', 'LIKE', "%$keyword%")
                ->orWhere('callory', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->orWhere('images', 'LIKE', "%$keyword%")
                ->orWhere('image_in', 'LIKE', "%$keyword%")
                ->orWhere('image_out', 'LIKE', "%$keyword%")
                ->orWhere('weight', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $products = Product::latest()->paginate($perPage);
        }

        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $filters=Filter::all();
        $categories=Category::all();
        return view('admin.products.create', compact('categories','filters'));
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
        $this->validate($request, [
			'category_id' => 'required'
        ]);

        if ($request->hasFile('img')) {
            $file=$request->file('img');
            $img=time().$file->getClientOriginalName();
            $file->move('images/products', $img);
        }else{
            $img=null;
        }
        if ($request->hasFile('image_in')) {
            $file=$request->file('image_in');
            $image_in=time().$file->getClientOriginalName();
            $file->move('images/products', $image_in);
        }else{
            $image_in=null;
        }
        if ($request->hasFile('image_out')) {
            $file=$request->file('image_out');
            $image_out=time().$file->getClientOriginalName();
            $file->move('images/products', $image_out);
        }else{
            $image_out=null;
        }

        if($request->hasfile('images'))
         {

            foreach($request->file('images') as $image)
            {
                $name=time().$image->getClientOriginalName();
                $image->move('images/products', $name);  
                $images[] = $name;  
            }
         }else{
             $images=null;
         }

        $requestData=[
            'category_id'=>$request->category_id,
            'filter_id'=>$request->filter_id,
            'protein'=>$request->protein,
            'carbo'=>$request->carbo,
            'fat'=>$request->fat,
            'callory'=>$request->callory,
            'weight'=>$request->weight,
            'image'=>$img,
            'image_in'=>$image_in,
            'image_out'=>$image_out,
            'images'=>json_encode($images),

            'ru'=>[ 'name'=>$request->name_ru, 'description'=>$request->description_ru, 'about'=>$request->about_ru, 'consist'=>$request->consist_ru ],
            'by'=>[ 'name'=>$request->name_by, 'description'=>$request->description_by, 'about'=>$request->about_by, 'consist'=>$request->consist_by ],
            'en'=>[ 'name'=>$request->name_en, 'description'=>$request->description_en, 'about'=>$request->about_en, 'consist'=>$request->consist_en ],
        ];
        
        Product::create($requestData);
        $product=Product::latest()->first();
        $action='save';
        return view('admin.products.add-attributes', compact('product', 'action'))->with('flash_message', 'Product added!');
    }

    public function saveAttributes(Request $request, $id)
    {
             
        for ($i=0; $i <count($request->weights) ; $i++) { 

            $data=[
                'weight'=>$request->weights[$i],
                'time'=>$request->times[$i],
                'qty'=>$request->qtys[$i],
                'product_id'=>$request->id,
            ];
            ProductAttribute::create($data);
        }

       return redirect('admin/products')->with('flash_message', 'Product attributes added!');
    }

    public function updateAttributes(Request $request, $id)
    {
        $product=Product::findOrFail($id);
       
        for ($i=0; $i <count($request->weights) ; $i++) { 
            $data=[
                'weight'=>$request->weights[$i],
                'time'=>$request->times[$i],
                'qty'=>$request->qtys[$i],
                'product_id'=>$request->id,
            ];
            if(!empty($request->attr_id[$i])){
                ProductAttribute::find($request->attr_id[$i])->update($data);
            }else{
                ProductAttribute::create($data);
            }
            
        }
        
        return redirect('admin/products')->with('flash_message', 'Product attributes updated!');
    }
    public function deleteAttribute(Request $request)
    {
       
        ProductAttribute::destroy($request->attr_id);
        
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
        $product = Product::findOrFail($id);

        return view('admin.products.show', compact('product'));
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
        $product = Product::findOrFail($id);
        $filters=Filter::all();
        $categories=Category::all();
        return view('admin.products.edit', compact('product', 'categories', 'filters'));
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
        $this->validate($request, [
			'category_id' => 'required'
		]);
        
        if ($request->hasFile('new_img')) {
            $file=$request->file('new_img');
            $img=time().$file->getClientOriginalName();
            $file->move('images/products', $img);
        }else{
            $img=$request->last_img;
        }
        if ($request->hasFile('new_image_in')) {
            $file=$request->file('new_image_in');
            $image_in=time().$file->getClientOriginalName();
            $file->move('images/products', $image_in);
        }else{
            $image_in=$request->last_image_in;
        }
        if ($request->hasFile('new_image_out')) {
            $file=$request->file('new_image_out');
            $image_out=time().$file->getClientOriginalName();
            $file->move('images/products', $image_out);
        }else{
            $image_out=$request->last_image_out;
        }

        if($request->hasfile('new_images'))
         {

            foreach($request->file('new_images') as $image)
            {
                $name=time().$image->getClientOriginalName();
                $image->move('images/products', $name);  
                $images[] = $name;  
            }
         }else{
             $images=json_decode($request->last_images);
         }

        $requestData=[
            'category_id'=>$request->category_id,
            'filter_id'=>$request->filter_id,
            'protein'=>$request->protein,
            'carbo'=>$request->carbo,
            'fat'=>$request->fat,
            'callory'=>$request->callory,
            'weight'=>$request->weight,
            'image'=>$img,
            'image_in'=>$image_in,
            'image_out'=>$image_out,
            'images'=>json_encode($images),

            'ru'=>[ 'name'=>$request->name_ru, 'description'=>$request->description_ru, 'about'=>$request->about_ru, 'consist'=>$request->consist_ru ],
            'by'=>[ 'name'=>$request->name_by, 'description'=>$request->description_by, 'about'=>$request->about_by, 'consist'=>$request->consist_by ],
            'en'=>[ 'name'=>$request->name_en, 'description'=>$request->description_en, 'about'=>$request->about_en, 'consist'=>$request->consist_en ],
        ];

        $product = Product::findOrFail($id);
        $product->update($requestData);
        $action='update';
        return view('admin.products.add-attributes', compact('product', 'action'))->with('flash_message', 'Product updated!');
       
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
        Product::find($id)->attributes()->delete();
        Product::destroy($id);
        return redirect('admin/products')->with('flash_message', 'Product deleted!');
    }
}
