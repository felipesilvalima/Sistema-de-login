<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
       
      $dados = User::all();
    return view('index', compact('dados'));
        
    }
    
    public function store(RegisterRequest $request)
    {
        $data = $request->validated();
        $data['password'] = bcrypt($request->password);
        $user = User::create($data);

        Auth::login($user);

        return redirect()->route('login.auth')->with('register','Cadastrado com sucesso');

    }

}
