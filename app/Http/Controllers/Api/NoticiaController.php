<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class NoticiaController extends Controller {
    public function index() {
        $noticias = News::paginate(6); // Pagina com 6 notícias por página
        return response()->json($noticias);
    }

    public function show($id) {
        $noticia = News::find($id);

        if (!$noticia) {
            return response()->json(['error' => 'Notícia não encontrada'], 404);
        }

        return response()->json($noticia);
    }

    public function store(Request $request) {
        $news = News::create([
            'titulo' => $request->titulo,
            'conteudo' => $request->conteudo,
            'username' => $request->username
        ]);

        return response()->json($news, 201); // Created
    }

    public function update(Request $request, $id) {
        $noticia = News::find($id);

        if (!$noticia) {
            return response()->json(['error' => 'Notícia não encontrada'], 404);
        }

        $noticia->update($request->all());

        return response()->json($noticia);
    }

    public function destroy($id) {
        $noticia = News::find($id);

        if (!$noticia) {
            return response()->json(['error' => 'Notícia não encontrada'], 404);
        }

        $noticia->delete();

        return response()->json(['message' => 'Notícia apagada com sucesso!']);
    }
}
