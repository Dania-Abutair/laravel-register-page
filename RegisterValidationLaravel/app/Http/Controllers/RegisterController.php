<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index(){
        
        return view('register');
    }
    public function form(Request $req){
        $req->validate([
          'fullname'=>'required',
          'email'=>'required|email',
          'password' =>'required|confirmed|min:8|max:14',
         'mobile'=>'required|digits:14',
         
        ]);
       $input= $req->input();
        return view('register',compact('input'));
    }
}
