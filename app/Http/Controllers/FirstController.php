<?php
namespace App\Http\Controllers;

class FirstController{


	public function myFunction(){
		echo "hi";

    }

	public function Customers($id){
		$customers = [
			['id'=>1,'name'=>'Ram'],
			['id'=>2,'name'=>'Ram1'],
			['id'=>3,'name'=>'Ram2'],

		];

		$matched = '';
		foreach($customers as $customer) {

			if ($customer['id'] == $id) {

				$matched = $customer;
				$name = $matched['name'];
			}
		}

		if ($matched == '') {

			abort(404);
		}
		else{
			return view('cust_detail',['name'=>$name]);
		}

	}


}