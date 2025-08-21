<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Author extends Model
{
    protected $fillable = ['name', //'book', 
    'first', 'last', 'email', 'password'];

    // TODO: ongebruikte commentaren verwijderen

    // public function author() {
    //     return $this->belongsTo(Author::class);
    // }

    public function books() {
        return $this->belongsTo(Book::class);
    }

}
