<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'isbn',
        'title',
        'author',
        'category_id',
        'published_year',
        'available'
    ];

    // Relação: Um livro pertence a uma categoria
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relação: Um livro tem muitos empréstimos
    public function loans()
    {
        return $this->hasMany(Loan::class);
    }
}