<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $fillable = [
        'book_id',
        'user_id',
        'loan_date',
        'return_date',
        'returned'
    ];

    protected $casts = [
        'loan_date' => 'date',
        'return_date' => 'date',
        'returned' => 'boolean'
    ];

    // Relação: Um empréstimo pertence a um livro
    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    // Relação: Um empréstimo pertence a um utilizador
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}