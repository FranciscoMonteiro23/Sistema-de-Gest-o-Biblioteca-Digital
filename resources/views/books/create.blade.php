@extends('layouts.app')

@section('title', 'Adicionar Livro - Biblioteca Digital')

@section('content')
<div class="mb-6">
    <a href="{{ route('books.index') }}" class="text-indigo-600 hover:text-indigo-800 font-medium transition">
        <i class="fas fa-arrow-left mr-1"></i> Voltar para Livros
    </a>
</div>

<div class="bg-white rounded-lg shadow-xl p-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">
        <i class="fas fa-plus-circle text-indigo-600"></i> Adicionar Novo Livro
    </h1>

    <form action="{{ route('books.store') }}" method="POST" class="space-y-6">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- ISBN -->
            <div>
                <label for="isbn" class="block text-sm font-bold text-gray-700 mb-2">
                    <i class="fas fa-barcode text-indigo-600"></i> ISBN *
                </label>
                <input type="text" 
                       name="isbn" 
                       id="isbn" 
                       value="{{ old('isbn') }}"
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition @error('isbn') border-red-500 @enderror"
                       placeholder="Ex: 9781234567890"
                       maxlength="13"
                       required>
                @error('isbn')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Título -->
            <div>
                <label for="title" class="block text-sm font-bold text-gray-700 mb-2">
                    <i class="fas fa-heading text-indigo-600"></i> Título *
                </label>
                <input type="text" 
                       name="title" 
                       id="title" 
                       value="{{ old('title') }}"
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition @error('title') border-red-500 @enderror"
                       placeholder="Ex: O Senhor dos Anéis"
                       required>
                @error('title')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Autor -->
            <div>
                <label for="author" class="block text-sm font-bold text-gray-700 mb-2">
                    <i class="fas fa-user-edit text-indigo-600"></i> Autor *
                </label>
                <input type="text" 
                       name="author" 
                       id="author" 
                       value="{{ old('author') }}"
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition @error('author') border-red-500 @enderror"
                       placeholder="Ex: J.R.R. Tolkien"
                       required>
                @error('author')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Categoria -->
            <div>
                <label for="category_id" class="block text-sm font-bold text-gray-700 mb-2">
                    <i class="fas fa-tag text-indigo-600"></i> Categoria *
                </label>
                <select name="category_id" 
                        id="category_id" 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition @error('category_id') border-red-500 @enderror"
                        required>
                    <option value="">Selecione uma categoria</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                    @endforeach
                </select>
                @error('category_id')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Ano de Publicação -->
            <div>
                <label for="published_year" class="block text-sm font-bold text-gray-700 mb-2">
                    <i class="fas fa-calendar text-indigo-600"></i> Ano de Publicação
                </label>
                <input type="number" 
                       name="published_year" 
                       id="published_year" 
                       value="{{ old('published_year') }}"
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition @error('published_year') border-red-500 @enderror"
                       placeholder="Ex: 2024"
                       min="1500"
                       max="{{ date('Y') }}">
                @error('published_year')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Disponível -->
            <div class="flex items-center">
                <div class="flex items-center h-full">
                    <input type="checkbox" 
                           name="available" 
                           id="available" 
                           value="1"
                           {{ old('available', true) ? 'checked' : '' }}
                           class="w-5 h-5 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                    <label for="available" class="ml-3 text-sm font-bold text-gray-700">
                        <i class="fas fa-check-circle text-green-600"></i> Livro Disponível
                    </label>
                </div>
            </div>
        </div>

        <!-- Botões -->
        <div class="flex justify-end space-x-4 pt-6 border-t">
            <a href="{{ route('books.index') }}" class="px-6 py-3 bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold rounded-lg transition">
                <i class="fas fa-times mr-1"></i> Cancelar
            </a>
            <button type="submit" class="px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-bold rounded-lg shadow-lg transition transform hover:scale-105">
                <i class="fas fa-save mr-1"></i> Guardar Livro
            </button>
        </div>
    </form>
</div>
@endsection