<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    //
    public function index(){
        
        return view('registersql');
    }
    public function form(Request $req){
        $req->validate([
          'fullname'=>'required',
          'email'=>'required|email',
          'password' =>'required|confirmed|min:8|max:14',
         'mobile'=>'required|digits:14',
         
        ]);
       
       

        Employee::create([
            'email'=>$req['email'],
            'password'=>$req['password'],
            'mobile'=>$req['mobile'],
            'fullname'=>$req['fullname'],
            
        ]);

        $all_employee=Employee::all();

        return view('/registertable',compact('all_employee'));

    }

    public function show(){
        $all_employee=Employee::all();

        return view('/registertable',compact('all_employee'));

    }
    public function delete($userid){
      //Employee::where('userid',$userid)->delete();
      Employee::destroy($userid);
      $all_employee=Employee::all();
        return redirect('/registertable');

    }

    public function update(Request $req,$userid)
    {
        $req->validate([
            'fullname'=>'required',
            'email'=>'required|email',
            'password' =>'required|confirmed|min:8|max:14',
           'mobile'=>'required|digits:14',
           
          ]);

          Employee::where("userid",$userid)->update([
            'email'=>$req['email'],
            'password'=>$req['password'],
            'mobile'=>$req['mobile'],
            'fullname'=>$req['fullname'],
            
            
        ]);
        return redirect('/registertable'); 


    }

    public function updateView($userid){

    $student=Employee::where('userid',$userid)->get()->first();
    return view('edit',compact('student'));
    }

}
