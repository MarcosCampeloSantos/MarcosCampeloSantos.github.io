<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistroController extends Controller
{
    public function cadastrarUsuario(Request $request)
    {
        $usuario = new User();
        
        $usuario->name = $request->nome;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->senha);
        $usuario->remember_token = $request->_token;

        $usuario->save();
        
        return view('home.home');

    }
}
