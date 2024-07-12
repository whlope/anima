<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login()
    {
        if(Auth::check()){
            return redirect()->route('home');            
        }else{
            return view('login');
        }
    }
    public function actionlogin(Request $request)
    {
        $data=[
            'email'=>$request->input('email'),
            'password'=>$request->input('password'),
        ];
        if(Auth::attempt($data)){
            return redirect('home');
        }else{
            session()->flash('error','Email atau Password Anda Salah');
            return redirect('/login');
        }
    }
    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}