<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //

     //perderisa je i logum mos me mjt mu as me pa loginin(formen)
     public function  __construct(){
        $this->middleware(['guest']);
    }


    public function index(){
        return view('auth.login');
    }

    public function store(Request $request){
          //valido te dhenat
          $this->validate($request, [
            'email'=>'required|email',
            'password'=>'required'
        ]);
        
             //bone sign in userin edhe jepja mundesin me bo remember me
      if(!auth()->attempt($request->only('email', 'password'),  $request->remember)){
          return back()->with('status', 'Invalid login details'); //nese kyqja deshton kjo e kthe nje sesio me qet mesazh
      }
         
       return redirect()->route('todos');
    }
}
