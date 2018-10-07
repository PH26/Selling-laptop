<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogin(){
        return view('Admin.login');
    }
    public function login(Request $request){
        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])) {
            return redirect()->route('admin.index')->with('message','Login');
        }else{
            return redirect()->route('admin.getLogin')->with('message','');
        }
    }public function logout(){
        Auth::logout();
        return redirect()->route('admin.getLogin');
    }

}
