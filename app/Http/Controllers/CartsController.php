<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Carts;
use App\Products;
use Session;

class CartsController extends Controller
{	

	public function cartdata()
    {   //   DB::select('select quantity from carts where sessionkey = ?', ['javris']);
        $key=Session::get('unique_session_key');
        $items = DB::table('carts')
            ->Join('products', 'products.product_id', '=', 'carts.product_id')
            ->where('sessionkey', $key)
            ->get();
        return view('/cart', ['items' => $items]);  
    }


    public function adddata(Request $request)
    {
    	$cart = new Carts;

    	$cart->product_id =$request->input('idofdata');
    	$cart->sessionkey =Session::get('unique_session_key');
    	$cart->quantity = 1;
    	$cart->save();
    	echo "Added";
    }

    public function deletedata(Request $request)
    {
        $cart_id=$request->input('cartid');
        DB::delete('delete from carts where cart_id = ?', [$cart_id]);
        echo "Deleted";
    }

    public function updatedata(Request $request)
    {
        $cart_id=$request->input('cartid');
        $quantity=$request->input('productquantity');
        DB::update('update carts set quantity = ? where cart_id = ?',[$quantity,$cart_id]);
        echo "Updated";
    }


}