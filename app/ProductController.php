<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\RecommendProduct;
use App\Models\SimilarProduct;
use App\Models\BuyWithProduct;
use App\Models\Review;
use App\Models\Region;
use App\Models\Tag;
use App\Traits\UploadAble;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class ProductController extends AdminController
{
    use UploadAble;

    public function index()
    {
        $this->setPageTitle('Продукция', 'Вся продукция');
        $products = Product::orderBy('id','asc')->get();

        return view('admin.products.index', ['products'=> $products]);
    }

    public function create()
    {
        $this->setPageTitle('Продукт', 'Создание продукта');
        $categories = Category::all();
        $regions = Region::all();
        $tags = Tag::all()->pluck('tag', 'id');
        $products = Product::all();

        return view('admin.products.create',['categories'=>$categories,'tags'=>$tags,'regions'=>$regions,'products'=>$products]);
    }



    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required'
        ]);

        $collection = collect($request);
        
        $offer_day= $collection->has('offer_day') ? 1 : 0;
        $is_active = $collection->has('is_active') ? 1 : 0;
        $popular = $collection->has('popular') ? 1 : 0;
        $new = $collection->has('new') ? 1 : 0;
        $sale = $collection->has('sale') ? 1 : 0;
        if ($collection->has('image') && ($request['image'])) {
            $image = time().$request->file('image')->getClientOriginalName();

            $image = $request->file('image')->move('images/products/', $image);

        }

        if ($collection->has('image') && ($request['image'])){
            $merge = $collection->merge(compact('image','is_active','popular','new','sale','offer_day'));
        }else{
            $merge = $collection->merge(compact('is_active','popular','new','sale','offer_day'));
        }
        $product = new Product($merge->all());

        $product->save();
        if ($collection->has('tags')) {
            $product->tags()->attach($request['tags']);
        }
        if ($collection->has('rec_products')) {
            foreach($request->rec_products as $rec_id){
                RecommendProduct::create([
                    'product_id'=>$product->id,
                    'recommend_product_id'=>$rec_id
                ]);
            }
        }
        if ($collection->has('sim_products')) {
            foreach($request->sim_products as $sim_id){
                SimilarProduct::create([
                    'product_id'=>$product->id,
                    'similar_product_id'=>$sim_id
                ]);
            }
        }
        if ($collection->has('buy_products')) {
            foreach($request->buy_products as $buy_id){
                BuyWithProduct::create([
                    'product_id'=>$product->id,
                    'buy_product_id'=>$buy_id
                ]);
            }
        }
        if ($collection->has('categories')) {
            $product->categories()->attach($request['categories']);
        }if ($collection->has('regions')) {
        $product->regions()->attach($request['regions']);
    }

        $product=Product::latest()->first();
        if($request->hasfile('images'))
        {

            foreach($request->file('images') as $image)
            {
                $name=time().$image->getClientOriginalName();
                $image->move('images/products', $name);
                ProductImage::create(['image'=>$name, 'product_id'=>$product->id]);
            }
        }



        if (!$product) {
            return $this->responseRedirectBack('Произошла ошибка.', 'error', true, true);
        }
        return $this->responseRedirect('admin.products.index', 'Товар успешно создан' ,'success',false, false);


    }


    public function edit($id)
    {
        $product = Product::findorfail($id);
        $regions = Region::all();
        $categories = Category::all();
        $tags = Tag::all()->pluck('tag', 'id');
        $reviews = Review::where('product_id',$id)->get();
        $products = Product::all();


        $this->setPageTitle('Товар :' .$product->name, 'Редактирование товара');
        return view('admin.products.edit', ['product'=> $product,'categories'=>$categories,'tags'=>$tags,'regions'=>$regions,'reviews'=>$reviews,'products'=>$products]);
    }



    public function update(Request $request, $id)
    {
//        $this->validate($request, [
//            'category_id' => 'required'
//        ]);

        $product = Product::findOrFail($id);


        $collection = collect($request->all());


        if ($collection->has('image') && ($request['image'])){

            if ($product->image != null) {
                unlink(($product->image) ?? null);
            }
            $image = time().$request->file('image')->getClientOriginalName();
            $image = $request->file('image')->move('images/products/', $image);
        }
        $offer_day= $collection->has('offer_day') ? 1 : 0;
        $is_active = $collection->has('is_active') ? 1 : 0;
        $popular = $collection->has('popular') ? 1 : 0;
        $new = $collection->has('new') ? 1 : 0;
        $sale = $collection->has('sale') ? 1 : 0;
        if ($collection->has('tags')) {
            $product->tags()->sync($request->input('tags'));
        }
        if ($collection->has('categories')) {
            $product->categories()->sync($request->input('categories'));
        }
        if ($collection->has('regions')) {
            $product->regions()->sync($request->input('regions'));
        }
        if ($collection->has('rec_products')) {
            $product->recommends()->delete();
            foreach ($request->rec_products as $rec_id) {
                RecommendProduct::create([
                    'product_id'=>$product->id,
                    'recommend_product_id'=>$rec_id,
                ]);
            }
        }
        if ($collection->has('sim_products')) {
            $product->similars()->delete();
            foreach ($request->sim_products as $sim_id) {
                SimilarProduct::create([
                    'product_id'=>$product->id,
                    'similar_product_id'=>$sim_id,
                ]);
            }
        }
        if ($collection->has('buy_products')) {
            $product->buyWith()->delete();
            foreach($request->buy_products as $buy_id){
                BuyWithProduct::create([
                    'product_id'=>$product->id,
                    'buy_product_id'=>$buy_id
                ]);
            }
        }

        if ($collection->has('image') && ($request['image'])){
            $merge = $collection->merge(compact('image','is_active','popular','new','sale','offer_day'));
        }else{
            $merge = $collection->merge(compact('is_active','popular','new','sale','offer_day'));
        }


        $product->update($merge->all());
        if($request->hasfile('images'))
        {

            foreach($request->file('images') as $image)
            {
                $name=time().$image->getClientOriginalName();
                $image->move('images/products', $name);
                ProductImage::create(['image'=>$name, 'product_id'=>$product->id]);
            }
        }

        if (!$product) {
            return $this->responseRedirectBack('Произишла ошибка.', 'error', true, true);
        }
        return $this->responseRedirectBack('Товар успешно обновлен' ,'success',false, false);
    }



    public function delete($id)
    {
        $product = Product::find($id);
        if($product->image){
            unlink(public_path($product->image));
        }
        $product->delete();

        if (!$product) {
            return $this->responseRedirectBack('Ошибка, товар не удален.', 'error', true, true);
        }
        return $this->responseRedirect('admin.products.index', 'Товар успешно удален' ,'success',false, false);
    }

    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;

            $request->file('upload')->move(public_path('upload'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('upload/'.$fileName);
            $msg = 'Изображение успешно загружено';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }
    
    
    
    public function storeReview(Request $request)
    {

        $this->validate($request, [
            'name' => 'required'
        ]);
        $collection = collect($request);
        $review = new Review($collection->all());
        $review ->save();
        if (!$review) {
            return $this->responseRedirectBack('Произошла ошибка.', 'error', true, true);
        }
        return $this->responseRedirectBack('Отзыв успешно создан' ,'success',false, false);
    }


    public function updateReview(Request $request, $id)
    {

        $review = Review::findOrFail($id);

        $collection = collect($request->all());
        $review->update($collection->all());

        if (!$review) {
            return $this->responseRedirectBack('Произишла ошибка.', 'error', true, true);
        }
        return $this->responseRedirectBack('Отзыв успешно обновлен' ,'success',false, false);
    }

    

    public function deleteProductPhoto($id)
    {

        $productImage = ProductImage::findOrFail($id);

        unlink(public_path('/images/products/'.$productImage->image));

        $productImage->delete();

    }
    
    public function check_slug(Request $request)
    {
        $slug = ($request->name);
        $slugProd = Str::slug($slug);
        return response()->json(['slug' => $slugProd]);
    }
}
