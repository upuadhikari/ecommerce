<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
   public function studentPostFunction(){
		
		$query='Select * From npost';
		$postq=\DB::select(\DB::raw($query));
		return view('post_detail',['posts'=>$postq]);

    }
}
