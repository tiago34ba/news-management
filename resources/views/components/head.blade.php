<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>teste</title>
</head>
<body>
    <nav class="bg-white border-gray-200 dark:bg-gray-900 shadow-xl">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center">
                <div class="h-8 mr-3">
                    <svg data-darkreader-inline-stroke="" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z"></path>
                    </svg>
                </div>
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Portal de Noticias</ span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
            <div class="w-full max-w-sm mx-auto">
                <form class="relative" method="GET" action="{{route('noticias.search')}}">
                    @csrf
                    <input
                    class="w-full h-12 px-4 py-2 border-2 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    type="text"
                    placeholder="Pesquisar" name="term"
                    />
                    <button
                        class="absolute inset-y-0 right-0 flex items-center justify-center w-12 bg-blue-500 text-white rounded-md"
                        type="submit"
                    >
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M15.828 14.586l4.242 4.243-1.414 1.414-4.242-4.243A7.946 7.946 0 0 1 8 16c-4.418 0-8-3.582-8-8s3.582-8 8-8 8 3.582 8 8a7.946 7.946 0 0 1-1.172 4.414zM8 14c3.309 0 6-2.691 6-6s-2.691-6-6-6-6 2.691-6 6 2.691 6 6 6z"
                        />
                        </svg>
                    </button>
                </form>
            </div>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="/" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded  md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500"     aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="/noticias" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100     md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white   md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white  md:dark:hover:bg-transparent">Listar</a>
                    </li>
                    <li>
                        <a href="/noticias/create" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100     md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white   md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white  md:dark:hover:bg-transparent">Adicionar</a>
                    </li>
                    <li>
                        <a href="https://www.praticainternet.com.br/clinicmais/" target='_blank'class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100     md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white   md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white  md:dark:hover:bg-transparent">Sobre</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>