<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users= User::all();
        return view('Admin.users.list',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.users.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,[
           'name'=>'required|max:255',
           'email'=>'required|email|unique:users,email',
           'password'=>'required|min:6|max:25',
           'user_type'=>'required|max:2'
        ],
        [
            'name.required'=>'Please input user',
            'name.min'=>'Length min name 3',
            'password.required'=>"Please input password",
            'password.min'=>'Length min password 6',
            'password.max'=>'Length max password 25',
            'email.required'=>'Please input email',
            'email.unique'=>'Email already exists',
            'user_type.required'=>'Please input user_type',
            'user_type.max'=>'The user has a value of 0 or 1'
        ]);
       $user=new  User;
       $user->name= $request->name;
       $user->email= $request->email;
       $user->password = $request->password;
       $user->user_type= $request->user_type;
       $user->save();
       return redirect()->route('users.add')->with('message',' Add successful');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('Admin.users.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->update($request->all());
//     dd($request->all());
        return redirect()->route('users.list')->withSuccess('message','Update  success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.list');
    }
}
