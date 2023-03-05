<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use app\Models\GYMProject;
class GYMController extends Controller
{
    public function home(){
        return view('Home');
    }
    public function Sechedule(){
        return view('Schedule');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function signup(){
        return view('signup');
    }

    public function signupdata(Request $request){
      $request->validate([
        'name'=>'required',
        'email'=>'required|email|unique:g_y_m_projects',
         'number'=>'required|min:10',
         'gender'=>'required',
         'state'=>'required',
         'dob'=>'required|date',
         'Address'=>'required',
         'password'=>'required|min:5',
         'Cpassword'=>'required'
      ]);
      $GYMuser=new GYMProject();
      $GYMuser->name=$request->name;
      $GYMuser->email=$request->email;
      $GYMuser->number=$request->number;
      $GYMuser->gender=$request->gender;
      $GYMuser->state=$request->state;
      $GYMuser->dob=$request->dob;
      $GYMuser->Address=$request->Address;
      $GYMuser->password= Hash::make($request->password);
      $GYMuser->Cpassword= Hash::make($request->Cpassword);
      if( $GYMuser->password= $GYMuser->Cpassword){
        $request=$GYMuser->save();
        if ($request) {
            return back()->with('success', "user register successfully");
         } else {
            return back()->with('failure', "something is wrong");
         }
      }
      else{
        return "password is not matched";
      }


    }
    
}
