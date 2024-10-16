@include('components.head')

@if (session('success'))
    <div class="bg-red-500 text-white py-4 px-6 mb-4 rounded-md max-w-sm mx-auto my-4">
        {{ session('success') }}
    </div>
@endif

<h1 class="text-5xl font-extrabold text-center py-4">Lista de Notícias</h1>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
    @foreach ($noticias as $noticia)
        <div class="max-w-min mx-auto bg-white rounded-md shadow-md">
            <div class="p-6 break-all">
                <h2 class="text-xl font-bold mb-2">{{ $noticia->titulo }}</h2>
                <h3 class="text-sm text-gray-500 mb-4">{{ $noticia->username }}</h3>
                <p class="text-gray-600 mb-4">{{ $noticia->conteudo }}</p>
            </div>
            <div class="flex justify-end px-6 pb-6">
                <button class="mr-2 px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded">
                    <a href="{{ route('noticias.edit', $noticia->id) }}">Editar</a>
                </button>
                <form action="{{ route('noticias.destroy', $noticia->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white font-semibold rounded" type="submit">Apagar</button>
                </form>
            </div>
        </div>
    @endforeach
</div>

<div class="mt-4">
    {{ $noticias->links() }}
</div>
