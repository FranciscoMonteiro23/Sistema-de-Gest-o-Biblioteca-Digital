@extends('layouts.app')

@section('title', 'Editar Categoria - Biblioteca Digital')

@section('content')
<div class="mb-6">
    <a href="{{ route('categories.index') }}" class="text-indigo-600 hover:text-indigo-800 font-medium transition">
        <i class="fas fa-arrow-left mr-1"></i> Voltar para Categorias
    </a>
</div>

<div class="bg-white rounded-lg shadow-xl p-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">
        <i class="fas fa-edit text-indigo-600"></i> Editar Categoria
    </h1>

    <form action="{{ route('categories.update', $category) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')

        <!-- Nome -->
        <div>
            <label for="name" class="block text-sm font-bold text-gray-700 mb-2">
                <i class="fas fa-tag text-indigo-600"></i> Nome da Categoria *
            </label>
            <input type="text" 
                   name="name" 
                   id="name" 
                   value="{{ old('name', $category->name) }}"
                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition @error('name') border-red-500 @enderror"
                   placeholder="Ex: Ficção Científica"
                   maxlength="100"
                   required>
            @error('name')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Descrição -->
        <div>
            <label for="description" class="block text-sm font-bold text-gray-700 mb-2">
                <i class="fas fa-align-left text-indigo-600"></i> Descrição
            </label>
            <textarea name="description" 
                      id="description" 
                      rows="4"
                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition @error('description') border-red-500 @enderror"
                      placeholder="Descrição opcional da categoria...">{{ old('description', $category->description) }}</textarea>
            @error('description')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Botões -->
        <div class="flex justify-end space-x-4 pt-6 border-t">
            <a href="{{ route('categories.index') }}" class="px-6 py-3 bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold rounded-lg transition">
                <i class="fas fa-times mr-1"></i> Cancelar
            </a>
            <button type="submit" class="px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-bold rounded-lg shadow-lg transition transform hover:scale-105">
                <i class="fas fa-save mr-1"></i> Atualizar Categoria
            </button>
        </div>
    </form>
</div>
@endsection