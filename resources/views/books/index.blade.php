@extends('layouts.app')

@section('content')
    <div class="w-full max-w-2xl mx-auto">
        <h1 class="text-3xl mt-8 font-bold text-gray-700">Aprendendo select dinâmico com Livewire</h1>

        <div class="flex items-center justify-between mt-8">
            <h2 class="text-2xl text-gray-400">Listagem de livros</h2>
            <a class="text-2xl text-indigo-700" href="{{ route('books.create') }}">Adicionar</a>
        </div>
        <div class="flex flex-col w-full bg-indigo-200 mt-16 p-8 space-y-2">
            <ul>
                @forelse($books as $book)
                    <li class="w-full px-2 cursor-pointer hover:bg-gray-200">
                        {{ $book->title }} - Autor: {{ $book->user->name }}
                    </li>
                @empty
                    <p>Nenhum livro cadastrado.</p>
                @endforelse
            </ul>
        </div>
    </div>
@endsection
