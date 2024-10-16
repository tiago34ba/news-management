<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function store(Request $request) { // inicia a transação

            $user = User::firstOrCreate(['username' => $request->username]);
            $user->news()->create(['titulo' => $request->titulo, 'conteudo' => $request->conteudo, 'username' => $request->username]);


        return redirect('noticias/create')->with('success', 'Noticia Criada com Sucesso!!!');
    }
    
}