<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $user = User::all();
       return view('Control Panel.features.users.users',['users' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Control Panel.features.users.add-users');
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
            'address' => 'required',    
            'contact' => 'required | max:11',
            'gender' => 'required',
            'email' => 'required',
            'password' => 'required'
           
        ]);

        $user = new User;
        $user->name = request('name');
        $user->address = request('address');
        $user->contact = request('contact');
        $user->gender = request('gender');
        $user->email = request('email');
        $user->password = request('password');


        if ($user->save()) {

 			return redirect()->back()->with('status', 'user inserted successfully!!');
 		}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
   
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('Control Panel.features.users.edit-users',['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
         request()->validate([
            'name' => 'required',
            'address' => 'required',    
            'contact' => 'required | max:11',
            'gender' => 'required',
            'email' => 'required',
            'password' => 'required'
           
        ]);

        $user = User::find($id);
        $user->name = request('name');
        $user->address = request('address');
        $user->contact = request('contact');
        $user->gender = request('gender');
        $user->email = request('email');
        $user->password = request('password');


        if ($user->save()) {

 			return redirect()->back()->with('status', 'user updated successfully!!');
 		}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->back();
    }
}
