<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
   public function index(){
   	
   	// $todo=Todo::all();
   	 $todo=Todo::latest()->paginate(5);
   	return view('TodoViews')->with('todos',$todo);

   }


   public function add()
    {   
        return view('add_todo');
    }
   
    
    public function edit($id)
    {
    	$todo = todo::find($id); 
        return view('edit_todo',['todo'=>$todo]);
    }


    public function save_new_todo()
    {
    	
        $obj = new todo;
        $obj->todo = request('todo');
        $obj->save();

        return redirect('/todos');//->with('status','Student Added Sucessufully');

    }
   
    public function update($id)
    {

        $obj = new todo;
        $obj = todo::find($id);
        $obj->todo = request('todo');
        $obj->save();

        return redirect('/todos');
    }

    public function delete($id)
    {
        todo::where('id',$id)->delete();

        return redirect('/todos');
    }
}
