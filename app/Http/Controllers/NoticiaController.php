<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\DB;
use App\Models\User;
class NoticiaController extends Controller
{
    public function index() {
        $noticias = DB::select('SELECT * FROM news');
        return view('noticias.index', ['noticias' => $noticias]);
    }
    public function create() {
        return view('noticias.create');
    }
    public function store(Request $request)
    {
        $news = News::create([
            'titulo' => $request->titulo,
            'conteudo' => $request->conteudo,
            'username' => $request->username
        ]);

        $user = User::where('username', $request->username)->first(); // Obtém o usuário existente pelo nome de usuário
        $news->user()->associate($user); // Associa a notícia ao usuário existente

        $user = User::find($request->username);
        if (!$user) {
            // Retornar erro ou mensagem de validação informando que o username é inválido
            return redirect('noticias')->withErrors(['username' => 'O username informado é inválido.']);
        }
    }
    public function destroy($id) {
        try {
            $noticia = News::findOrFail($id);
            $usuario = $noticia->username;
            $noticia->delete();
            if (!News::where('username', $usuario)->exists()) {
                $usuario = User::where('username', $usuario)->first();
                if ($usuario) {
                    $usuario->delete();
                }
            }
            return redirect('noticias')->with('success', 'Noticia apagada!');
        } catch (\Exception $e) {
            return abort(404);
        }


    }
    public function edit($id) {
        $noticia = News::where('id' ,$id)->first();
        return view('noticias.edit')->with('noticias', $noticia);
    }
    public function update(Request $request, $id) {
        $noticia = News::find($id);
        $noticia->titulo = $request->titulo;
        $noticia->conteudo = $request->conteudo;
        $noticia->username = $request->username;
        $noticia->save();
        return redirect('noticias')->with('success', 'Noticia editada');
    }
    public function search(Request $request) {
        $term = $request->input('term');
        $resultados = News::where('titulo', 'LIKE', '%' . $term . '%')
            ->orWhere('conteudo', 'LIKE', '%' . $term . '%')
            ->orWhere('username', 'LIKE', '%' . $term . '%')
            ->get();
        return view('noticias.search')->with('resultados', $resultados);
    }


}

