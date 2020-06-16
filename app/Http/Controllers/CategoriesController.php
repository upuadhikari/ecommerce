<?php

namespace App\Http\Controllers;

use App\categories;
use App\products;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function list($id)
    {
        $citems = products::where('category_id',$id)->get();
        return view('categorized-search',['citems' => $citems]);
    } 

    public function index()
    {
        $citems = categories::all();
        return view('Control Panel.features.categories.categories',['citems' => $citems]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Control Panel.features.categories.add-category');
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
           'cname' => 'required',
           'description' => 'required',
       ]);  

       $data = new categories;
       $data->name = request('cname');
       $data->description = request('description');


       if($data->save())
       {
       return redirect()->back()->with('status','Category has been added successfully!');
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = categories::find($id);
        return view('Control Panel.features.categories.edit-category',['category' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
         request()->validate([
           'cname' => 'required',
           'description' => 'required',
       ]);  

       $data = categories::find($id);
       $data->name = request('cname');
       $data->description = request('description');


       if($data->save())
       {
       return redirect()->back()->with('status','Category has been updated successfully!');
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        categories::find($id)->delete();
        return redirect()->back()->with('status','Category deleted successfully');
    }
}
