<?php declare(strict_types=1); 

namespace App\Http\Controllers;

use App\Mail\Trocasenha;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TrocaSenhaController extends Controller
{
    
    public function enviarEmail(Request $request) 
    {
        if($request->method() == "POST") 
        {

        
        $request->validate([
            'email' => 'required|email',
        ]);

        $email = $request->input('email');
        
        Mail::to($email)->send(new Trocasenha());

        return back()->with('enviado', 'E-mail enviado com sucesso!');
        }
        return view('troca');
    }
    
 

}