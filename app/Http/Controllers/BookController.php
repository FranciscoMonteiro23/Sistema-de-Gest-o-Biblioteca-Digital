<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('category')->get();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('books.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'isbn' => 'required|unique:books|digits:13',
            'title' => 'required|max:255',
            'author' => 'required',
            'category_id' => 'required|exists:categories,id',
            'published_year' => 'nullable|numeric|min:1500|max:' . date('Y'),
            'available' => 'boolean'
        ]);

        $validated['available'] = $request->has('available');

        Book::create($validated);

        return redirect()->route('books.index')->with('success', 'Livro criado com sucesso!');
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        $categories = Category::all();
        return view('books.edit', compact('book', 'categories'));
    }

    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'isbn' => 'required|digits:13|unique:books,isbn,' . $book->id,
            'title' => 'required|max:255',
            'author' => 'required',
            'category_id' => 'required|exists:categories,id',
            'published_year' => 'nullable|numeric|min:1500|max:' . date('Y'),
            'available' => 'boolean'
        ]);

        $validated['available'] = $request->has('available');

        $book->update($validated);

        return redirect()->route('books.index')->with('success', 'Livro atualizado com sucesso!');
    }

    public function destroy(Book $book)
    {
       $book->delete();
       return redirect()->route('books.index')->with('sucess','Livro apagado com sucesso!');
    }
}