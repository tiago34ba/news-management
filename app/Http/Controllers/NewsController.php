<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    // Listar todas as notícias
    public function index()
    {
        return response()->json(News::all(), 200);
    }

    // Criar uma nova notícia
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'author' => 'required|string|max:255',
        ]);

        $news = News::create($request->all());
        return response()->json($news, 201);
    }

    // Exibir uma notícia específica
    public function show($id)
    {
        $news = News::find($id);
        if (!$news) {
            return response()->json(['message' => 'Notícia não encontrada'], 404);
        }
        return response()->json($news, 200);
    }

    // Atualizar uma notícia
    public function update(Request $request, $id)
    {
        $news = News::find($id);
        if (!$news) {
            return response()->json(['message' => 'Notícia não encontrada'], 404);
        }

        $news->update($request->all());
        return response()->json($news, 200);
    }

    // Deletar uma notícia
    public function destroy($id)
    {
        $news = News::find($id);
        if (!$news) {
            return response()->json(['message' => 'Notícia não encontrada'], 404);
        }

        $news->delete();
        return response()->json(['message' => 'Notícia deletada com sucesso'], 200);
    }
}
