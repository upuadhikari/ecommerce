<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carts;
use Session;

class CartController extends Controller
{
    public function adddata(Request $request)
    {
    	$cart = new Carts;

    	$cart->product_id =$request->input('idofdata');
    	$cart->sessionkey =Session::get('this_will_be_unique_session_key_later_on');
    	$cart->quantity = 1;
    	$cart->save();
    	echo "Added";



    }
}
