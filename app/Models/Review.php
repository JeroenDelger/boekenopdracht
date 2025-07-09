<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['book_id', 'review', 'author_id'];

    public function book() {
        return $this->belongsTo(Book::class);
    }

    public function author() {
        return $this->belongsTo(Author::class);
    }
}
