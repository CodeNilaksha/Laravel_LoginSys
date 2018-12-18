<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{
    public function RegisterUser(Request $request){

        //validate rules 
        $this->validate($request , [

            'firstname'=> 'required|max:20',
            'lastname' => 'required|max:20',
            'email'    => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);
        



        //fetch data
        //1method
        // $firstname = $request['firstname'];
       
       $table = new User();  

       $table->first_name = $request->input('firstname');
       $table->last_name  = $request->input('lastname');
       $table->email      =  $request->input('email');
       $table->password   = bcrypt($request->input('password'));

       $table->save();
       return redirect()->back()->with('message', 'Registered Successfully');

    }

    public function LoginUser(Request $request){

        $data = $request->only('email','password');

        if(Auth::attempt($data)){
            return redirect()->route('home');
        }
         return redirect()->back()->with('message1', 'LoginFaild');
    }

    public function GetHome(){
        return view('home');
    }

    public function Logout(){
        Auth::logout();
        Session::flush(); 
        return redirect('/')->with('message1','Loggedout');
        
    }

    public function Welcome(){
        return view('welcome');
    }
}
