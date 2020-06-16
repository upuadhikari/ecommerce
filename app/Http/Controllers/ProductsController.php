<?php

namespace App\Http\Controllers;

use App\products;
use Illuminate\Http\Request;
use Session;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     /* For Control Panel (Admin) */

     public function cpanel_display()
     {
         $products = products::all();
         return view('Control Panel.features.products.products',['products' => $products]);
     }

     public function cpanel_create()
     {
        return view('Control Panel.features.products.addproducts');
     }

    public function cpanel_store()
     {
         request()->validate([
            'name' => 'required',
            'description' => 'required',    
            'price' => 'required',
            'stock' => 'required',
            'category' => 'required'
           
        ]);

    	$fileName = request('name') .  '.' .request()->file('profile')->getClientOriginalExtension();

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

    public function cpanel_edit($id)
     {

        $items = products::where('product_id',$id)->first();
        return view('Control Panel.features.products.edit-products',['item' => $items]);
     }

     public function cpanel_update($id)
     {     
          request()->validate([
            'name' => 'required',
            'description' => 'required',    
            'price' => 'required',
            'stock' => 'required',
            'category' => 'required'
           
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

 			return redirect("/cpanel/products")->with('status', 'product updated successfully!!');
         }
         
        }



     /*End of control panel */









      public function trendinghome()//this is to return trending product in landing page
    {   
        if (Session::has('unique_session_key')){
            $items = products::latest()->paginate(12);
            return view('/ecommerce', ['items' => $items]);  
        }
        else{
            //Function to generaye random session
            // session_start();
            function generateRandomString($length = 20) {
                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $charactersLength = strlen($characters);
                $randomString = '';
                for ($i = 0; $i < $length; $i++) {
                    $randomString .= $characters[rand(0, $charactersLength - 1)];
                }
                return $randomString;
            }
            $uniquesessionvalue=generateRandomString();
            //Putting the session unique value
            Session::put('unique_session_key',$uniquesessionvalue);
            //Returning the view
            $items = products::latest()->paginate(12);
            return view('/ecommerce', ['items' => $items]);
        }
    }


    public function index()
    {
        $items = products::latest()->paginate(9);
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
            'price' => 'required',
            'stock' => 'required',
            'category' => 'required'
           
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
            'price' => 'required',
            'stock' => 'required',
            'category' => 'required'
           
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