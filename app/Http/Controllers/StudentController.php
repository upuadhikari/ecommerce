<?php
namespace App\Http\Controllers;

use Illiminate\Http\Request;

class StudentController{
    
    public function myFunction(){
		
		return view('fornt_view');

    }

	public function studentFunction(){
		
		$query='Select * From user';
		$student=\DB::select(\DB::raw($query));
		return view('student_detail',['users'=>$student]);

    }


    

}