@extends('layouts.app')

@section('title', 'Categorias - Biblioteca Digital')

@section('content')
<div class="mb-6 flex justify-between items-center">
    <h1 class="text-3xl font-bold text-gray-800">
        <i class="fas fa-tags text-indigo-600"></i> Gestão de Categorias
    </h1>
    <a href="{{ route('categories.create') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-6 rounded-lg shadow-lg transition transform hover:scale-105">
        <i class="fas fa-plus mr-2"></i> Adicionar Nova Categoria
    </a>
</div>

<div class="bg-white rounded-lg shadow-xl overflow-hidden">
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gradient-to-r from-indigo-600 to-purple-600">
                <tr>
                    <th class="px-6 py-4 text-left text-xs font-bold text-white uppercase tracking-wider">ID</th>
                    <th class="px-6 py-4 text-left text-xs font-bold text-white uppercase tracking-wider">Nome</th>
                    <th class="px-6 py-4 text-left text-xs font-bold text-white uppercase tracking-wider">Descrição</th>
                    <th class="px-6 py-4 text-center text-xs font-bold text-white uppercase tracking-wider">Ações</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($categories as $category)
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        {{ $category->id }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-indigo-100 text-indigo-800">
                            <i class="fas fa-tag mr-1"></i> {{ $category->name }}
                        </span>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-700">
                        {{ $category->description ?? 'Sem descrição' }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                        <a href="{{ route('categories.edit', $category) }}" class="text-indigo-600 hover:text-indigo-900 mr-3 inline-block transition">
                            <i class="fas fa-edit"></i> Editar
                        </a>
                        <form action="{{ route('categories.destroy', $category) }}" method="POST" class="inline-block" onsubmit="return confirm('Tem certeza que deseja apagar esta categoria?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900 transition">
                                <i class="fas fa-trash"></i> Apagar
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-6 py-8 text-center text-gray-500">
                        <i class="fas fa-tags text-4xl mb-3 text-gray-300"></i>
                        <p class="text-lg">Nenhuma categoria encontrada. Adicione a primeira categoria!</p>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<div class="mt-4 text-gray-600 text-sm">
    <i class="fas fa-info-circle"></i> Total de categorias: <strong>{{ $categories->count() }}</strong>
</div>
@endsection