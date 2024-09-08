<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function auth(LoginRequest $request) 
    {
       
        $credentials = $request->only('email', 'password');

        if(Auth::attempt( $credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('dasboard.index'));
        }
        return redirect()->back()->with('error','Email ou senha inválido');
    }
    public function create() 
    {
        return view('create');
    }   
    
   
    public function logout( Request $request) 
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login.auth');
    }
   
}
