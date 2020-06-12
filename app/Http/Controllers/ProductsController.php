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
        $items = products::latest()->paginate(12);
        return view('/ecommerce', ['items' => $items]);  
    }


    public function index()
    {
        $items = products::latest()->paginate(12);
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

        request()->validate([
            'name' => 'required',
            'description' => 'required',    
            'price' => 'required'
           
        ]);

    	$fileName = request('name') .  rand(0,99) . '.' .request()->file('profile')->getClientOriginalExtension();

 		$profile = request()->file('profile')->storeAs('uploads/profile/', $fileName);

        $product = new products;
        $product->name = request('name');
        $product->description = request('description');
        $product->available_stocks = request('stock');
        $product->price = request('price');
        $product->category_id = request('category');
        $product->image = $fileName;
        $product->user_id = auth()->user()->id;


        if ($product->save()) {

 			return redirect()->back()->with('status', 'product inserted successfully!!');
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

        $item = products::where('product_id',$id)->first();
        return view('/product', ['product' => $item]);  

    }

    public function myproducts($id)
    {
          $myitems = products::where('user_id',$id)->get();
          return view('/myproduct',['myproducts' => $myitems]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items = products::where('product_id',$id)->first();
        return view('edit-myproduct',['item' => $items]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {

          request()->validate([
            'name' => 'required',
            'description' => 'required',    
            'price' => 'required | numeric',
            'available_stocks' => 'required',
            'category_id' => 'required'
           
        ]);

    	$fileName = request('name') .  rand(0,99) . '.' .request()->file('profile')->getClientOriginalExtension();

 		$profile = request()->file('profile')->storeAs('uploads/profile/', $fileName);

        $product = products::where('product_id', $id)->first();
        $product->name = request('name');
        $product->description = request('description');
        $product->available_stocks = request('stock');
        $product->price = request('price');
        $product->category_id = request('category');
        $product->image = $fileName;
        $product->user_id = auth()->user()->id;
      
         if ($product->save()) {

 			return redirect("/myproducts/{{auth::user()->id}}")->with('status', 'product updated successfully!!');
 		}
 		

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         
        products::where('product_id',$id)->delete();

        return redirect()->back()->with('status', 'product deleted successfully!!');
    }
}