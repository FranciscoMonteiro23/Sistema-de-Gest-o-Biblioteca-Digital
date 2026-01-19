<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];

    // Relação: Uma categoria tem muitos livros
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}