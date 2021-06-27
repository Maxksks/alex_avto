<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute_set;
use App\Models\Attribute_set_value;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->get();

        return view('admin.product.index', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('created_at', 'desc')->get();

        return view('admin.product.create', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->alias = $request->alias;
        $product->in_stock = 1;
        $product->quantity = $request->quantity;
        $product->Categories_id = $request->Categories_id;
        $product->description = $request->description;
        $product->was_sold_count = 0;
        
        $product->save();
        
        $img = new Image();
        $img->img = $request->img;
        $img->is_main = 0;
        $img->Products_id = $product->id;
        
        $img->save();

        return view('admin.product.attributes', [
            'prod' => $product
        ]);//back()->withSuccess('Товар успешно добавлен!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $prod_id = $product->id;
        
        $categories = Category::orderBy('created_at', 'desc')->get();
        $images = Image::where('Products_id', $prod_id)->first();
        $attributes = Attribute_set::where('Products_id', $prod_id)->get();  

        return view('admin.product.edit', [
            'categories' => $categories,
            'product' => $product,
            'images' => $images,
            'attributes' => $attributes
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->name = $request->name;
        $product->alias = $request->alias;
        $product->in_stock = 1;
        $product->quantity = $request->quantity;
        $product->Categories_id = $request->Categories_id;
        $product->description = $request->description;
        $product->was_sold_count = 0;
        
        $product->save();
        
        $img = Image::where('Products_id', $product->id)->get();
        $img->img = $request->img;
        $img->is_main = 0;
        $img->Products_id = $product->id;
        
        $img->save();

        //TODO: доделать аттрибуты получиения и сохранить их

        // foreach($attributes as $attribute)
        // {
        //     $attribute = Attribute_set::where('Products_id', $product->id)->get();
        // }
        // $attribute = Attribute_set::where('Products_id', $product->id)->get();

        return redirect()->back()->withSuccess('Товар успешно обновлен!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $img = Image::where('Products_id', $product->id);
        $img->delete();
        $product->delete();

        return redirect()->back()->withSuccess('Товар успешно удален!');
    }
}
