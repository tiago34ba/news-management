@include('components.head')




<h1 class="text-5xl font-extrabold text-center py-4">Editar notícia</h1>

<?php
?>

<div class="flex justify-center min-h-screen">
    <div class="bg-white rounded-lg p-8 w-full max-w-md">
        <form method="POST" action="{{ route('noticias.update', $noticias->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="titulo" class="block font-semibold mb-2">Título da Notícia</label>
                <input type="text" id="titulo" name="titulo" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500" value="{{$noticias->titulo}}">
            </div>
            <div class="mb-6">
                <label for="conteudo" class="block font-semibold mb-2">Conteúdo</label>
                <textarea id="conteudo" name="conteudo" class="w-full px-4 py-2 rounded-md border border-gray-300 h-24 resize-none focus:outline-none focus:border-blue-500">{{ old('conteudo', $noticias->conteudo) }}</textarea>
            </div>
            <input type="hidden" name="username" value="{{ $noticias->username }}">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-200">Enviar</button>
        </form>
    </div>
</div>
</body>
</html>