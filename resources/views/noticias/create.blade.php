@include('components.head')

<h1 class="text-5xl font-extrabold text-center py-3">Adicione uma notícia</h1>
@if (session('success'))
    <div class="bg-green-500 text-white py-4 px-6 mb-4 rounded-md max-w-sm mx-auto my-4">
        {{ session('success') }}
    </div>
@endif


    <div class="flex justify-center min-h-screen">
        <div class="bg-white rounded-lg p-8 w-full max-w-md">
            <form method="POST" action="/noticias/create">
                @csrf
                <div class="mb-4" >
                    <label for="username" class="block font-semibold mb-2">Nome de Usuário</label>
                    <input type="text" id="username" name="username" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500" placeholder="Digite seu nome de usuário" />
                </div>
                <div class="mb-4">
                    <label for="titulo" class="block font-semibold mb-2">Título da Notícia</label>
                    <input type="text" id="titulo" name="titulo" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500" placeholder="Digite o título da notícia" />
                </div>
                <div class="mb-6">
                    <label for="conteudo" class="block font-semibold mb-2">Conteúdo</label>
                    <textarea id="conteudo" name="conteudo" class="w-full px-4 py-2 rounded-md border border-gray-300 h-24 resize-none focus:outline-none focus:border-blue-500" placeholder="Digite o conteúdo da notícia"></textarea>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-200">Enviar</button>
            </form>
        </div>
    </div>
</body>
</html>