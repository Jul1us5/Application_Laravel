<?php

namespace App\Http\Controllers;

use App\Product;
use App\Album;
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
        return view('products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Product::all();
        return view('products.create');
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
        // $album = new Album();
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
        return redirect()->route('product.index');


        
    }


    // return redirect()->route('product.index')->with('success_message', 'Yra!');


    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
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
        $product->delete();
        return redirect()->route('product.index');
    }
    
}
