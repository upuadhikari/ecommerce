<?php

namespace App\Http\Controllers;

use App\products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function trendinghome()//this is to return trending product in landing page
    {
        $items = products::latest()->paginate(15);
        return view('/ecommerce', ['items' => $items]);  
    }


    public function index()
    {
        $items = products::latest()->paginate(15);
        return view('/shop', ['items' => $items]);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create-ad');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    	$fileName = request('name') .  rand(0,99) . '.' .request()->file('profile')->getClientOriginalExtension();

 		$profile = request()->file('profile')->storeAs('uploads/profile/', $fileName);

        $product = new products;
        $product->name = request('name');
        $product->description = request('description');
        $product->available_stocks = request('stock');
        $product->price = request('price');
        $product->category_id = request('category');
        $product->image = $fileName;

        if ($product->save()) {

 			return redirect('/create')->with('status', 'product inserted successfully!!');
 		}

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $item = products::where('product_id',$id)->first();;
        return view('/product', ['product' => $item]);  

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(products $products)
    {
        //
    }
}