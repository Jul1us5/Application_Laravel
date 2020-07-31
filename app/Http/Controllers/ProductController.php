<?php

namespace App\Http\Controllers;

use App\Product;
use App\Album;
use App\Category;
use App\ProductCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $products = Product::all();
        $categories = Category::all();
        return view('products.index', ['products' => $products], ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Product::all();
        $categories = Category::all();
        return view('products.create')->withCategories($categories);
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
        $product->title = $request->title;
        $product->name = $request->name;
        $product->about = $request->about;
        $product->code = $request->code;
        $product->notice = $request->notice;
        $product->tag = $request->tag;
        $product->save();



        foreach ($request->file('img') as $image) {
            $name = $image->getClientOriginalName();
            $destinationPath = public_path('/images/products');
            $image->move($destinationPath, $name);

            $album = new Album();
            $album->photo = $name;
            $album->product_id = $product->id;
            $album->save();
            
        }

        $categories = $request->categories;

       
 
            foreach ($categories as $category){
            $productCategory = new ProductCategory;
            $productCategory->product_id = $product->id;
            $productCategory->category_id = $category;
            $productCategory->save();
            }
        return redirect()->route('product.index')->with('success_message', 'Sukurta!');


        
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {


        foreach($product->getImages as $img) {
            $img->delete();

        }
        // $product->getCategory();
        // dd($product->getCategory;
        foreach($product->getCategory as $cat) {
            $cat->delete();

        }

        $product->delete();
        return redirect()->route('product.index')->with('success_message', 'Ištrintas!');
    }
    
}
