<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\payment;
use App\carts;
use App\products;
use App\orderdetails;
use App\orders;
use Session;

class CheckOutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function paypalpayment()
    {  
        $key=Session::get('unique_session_key');
        $items = DB::table('carts')
            ->Join('products', 'products.product_id', '=', 'carts.product_id')
            ->where('sessionkey', $key)
            ->get();

            //Adding data to orders table
                $total=0;
                foreach($items as $item){
                    $total+=$item->price *$item->quantity;
                }
                    $order = new orders;
                    $order->customer_id=1;//Default for now
                    $order->payment_status='paid';
                    $order->delivery_status='Not Delivered';
                    $order->total_amount=$total;
                    $order->payment_id=1;//Default for now
                    $order->session_key=$key;
                    $order->save();

            //Adding order detail of the order id
                    //Getting order id
                    $ids=DB::table('orders')
                            ->where('session_key', $key)
                            ->get();
                    foreach($ids as $id){
                        $orderid=$id->order_id;
                    }
                    //Adding  to order detail table
                    foreach($items as $item){
                        $orderdetail = new orderDetails;
                        $orderdetail->order_id=$orderid;
                        $orderdetail->product_id=$item->product_id;
                        $orderdetail->quantity=$item->quantity;
                        $orderdetail->total_delivery_charge=$item->delivery_charge;
                        $orderdetail->total_price=$item->quantity*$item->price;
                        $orderdetail->save();
                    }

            //Clearing the carts after purchase is completed
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
         return view('/ordersucess', ['items' => $items])->with('flash', 'Your order is made . Tranaction Completed You will receive a call from us soon');  
    }

    
}