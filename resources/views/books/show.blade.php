@extends('layouts.app')

@section('title', 'Detalhes do Livro - Biblioteca Digital')

@section('content')
<div class="mb-6">
    <a href="{{ route('books.index') }}" class="text-indigo-600 hover:text-indigo-800 font-medium transition">
        <i class="fas fa-arrow-left mr-1"></i> Voltar para Livros
    </a>
</div>

<div class="bg-white rounded-lg shadow-xl overflow-hidden">
    <div class="bg-gradient-to-r from-indigo-600 to-purple-600 px-8 py-6">
        <h1 class="text-3xl font-bold text-white">
            <i class="fas fa-book-open"></i> {{ $book->title }}
        </h1>
        <p class="text-indigo-100 mt-2">Detalhes completos do livro</p>
    </div>

    <div class="p-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- ISBN -->
            <div class="bg-gray-50 rounded-lg p-6 border-l-4 border-indigo-600">
                <div class="flex items-center mb-2">
                    <i class="fas fa-barcode text-indigo-600 text-xl mr-3"></i>
                    <h3 class="text-sm font-bold text-gray-600 uppercase">ISBN</h3>
                </div>
                <p class="text-2xl font-bold text-gray-800">{{ $book->isbn }}</p>
            </div>

            <!-- Título -->
            <div class="bg-gray-50 rounded-lg p-6 border-l-4 border-purple-600">
                <div class="flex items-center mb-2">
                    <i class="fas fa-heading text-purple-600 text-xl mr-3"></i>
                    <h3 class="text-sm font-bold text-gray-600 uppercase">Título</h3>
                </div>
                <p class="text-2xl font-bold text-gray-800">{{ $book->title }}</p>
            </div>

            <!-- Autor -->
            <div class="bg-gray-50 rounded-lg p-6 border-l-4 border-blue-600">
                <div class="flex items-center mb-2">
                    <i class="fas fa-user-edit text-blue-600 text-xl mr-3"></i>
                    <h3 class="text-sm font-bold text-gray-600 uppercase">Autor</h3>
                </div>
                <p class="text-2xl font-bold text-gray-800">{{ $book->author }}</p>
            </div>

            <!-- Categoria -->
            <div class="bg-gray-50 rounded-lg p-6 border-l-4 border-green-600">
                <div class="flex items-center mb-2">
                    <i class="fas fa-tag text-green-600 text-xl mr-3"></i>
                    <h3 class="text-sm font-bold text-gray-600 uppercase">Categoria</h3>
                </div>
                <p class="text-2xl font-bold text-gray-800">{{ $book->category->name }}</p>
                @if($book->category->description)
                <p class="text-sm text-gray-600 mt-2">{{ $book->category->description }}</p>
                @endif
            </div>

            <!-- Ano de Publicação -->
            <div class="bg-gray-50 rounded-lg p-6 border-l-4 border-yellow-600">
                <div class="flex items-center mb-2">
                    <i class="fas fa-calendar text-yellow-600 text-xl mr-3"></i>
                    <h3 class="text-sm font-bold text-gray-600 uppercase">Ano de Publicação</h3>
                </div>
                <p class="text-2xl font-bold text-gray-800">
                    {{ $book->published_year ?? 'Não especificado' }}
                </p>
            </div>

            <!-- Disponibilidade -->
            <div class="bg-gray-50 rounded-lg p-6 border-l-4 {{ $book->available ? 'border-green-600' : 'border-red-600' }}">
                <div class="flex items-center mb-2">
                    <i class="fas fa-{{ $book->available ? 'check-circle' : 'times-circle' }} text-{{ $book->available ? 'green' : 'red' }}-600 text-xl mr-3"></i>
                    <h3 class="text-sm font-bold text-gray-600 uppercase">Disponibilidade</h3>
                </div>
                <p class="text-2xl font-bold text-gray-800">
                    @if($book->available)
                    <span class="text-green-600">Disponível</span>
                    @else
                    <span class="text-red-600">Indisponível</span>
                    @endif
                </p>
            </div>
        </div>

        <!-- Informações Adicionais -->
        <div class="mt-8 bg-blue-50 rounded-lg p-6 border border-blue-200">
            <h3 class="text-lg font-bold text-gray-800 mb-4">
                <i class="fas fa-info-circle text-blue-600"></i> Informações Adicionais
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                <div>
                    <span class="font-semibold text-gray-700">Criado em:</span>
                    <span class="text-gray-600">{{ $book->created_at->format('d/m/Y H:i') }}</span>
                </div>
                <div>
                    <span class="font-semibold text-gray-700">Última atualização:</span>
                    <span class="text-gray-600">{{ $book->updated_at->format('d/m/Y H:i') }}</span>
                </div>
            </div>
        </div>

        <!-- Botões de Ação -->
        <div class="flex justify-end space-x-4 mt-8 pt-6 border-t">
            <a href="{{ route('books.index') }}" class="px-6 py-3 bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold rounded-lg transition">
                <i class="fas fa-arrow-left mr-1"></i> Voltar
            </a>
            <a href="{{ route('books.edit', $book) }}" class="px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-bold rounded-lg shadow-lg transition transform hover:scale-105">
                <i class="fas fa-edit mr-1"></i> Editar Livro
            </a>
        </div>
    </div>
</div>
@endsection