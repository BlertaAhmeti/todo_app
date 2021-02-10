<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    //
    //perderisa je i logum mos me mjt mu as me pa as me bo register
    public function  __construct(){
        $this->middleware(['guest']);
    }
    
     //shfaqe faqen per regiser
    public function index(){
        return view('auth.register');
    }


    //add somethig to db
    public function store(Request $request){
       //valido te dhenat
        $this->validate($request, [
            'name' => 'required|max:255',
            'username'=>'required|max:255',
            'email'=>'required|email|max:255',
            'password'=>'required|confirmed'
        ]);
     
        User::create([
            'name'=>$request->name,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);
           
        //mas regjistrimit bone sign in userin
       auth()->attempt($request->only('email', 'password'));
         
        return redirect()->route('todos');
    }
}
