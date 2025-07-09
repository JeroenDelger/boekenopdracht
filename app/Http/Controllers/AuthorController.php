<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\AuthorResource;
use App\Models\Author;
use App\Http\Requests\StoreAuthorRequest;

// use App\Models\Book;

class AuthorController extends Controller
{
    public function index(){
        return AuthorResource::collection(Author::all());
    }

    public function store(StoreAuthorRequest $request) {
        $author = Author::create($request->validated());
    
        $authors = Author::all();
        return AuthorResource::collection($authors);
        
    }

    public function update(StoreAuthorRequest $request, Author $author) {
       // dd($authors);
        $author->update($request->validated());
    
        $authors = Author::all();
        return AuthorResource::collection($authors);
    }
    
    public function destroy(Author $author) {
        ////?
        if ($author->books()->exists()) {
            throw new HttpResponseException(response()->json([
                'message' => 'Deze auteur kan niet worden verwijderd omdat er nog boeken aan gekoppeld zijn.'
            ], 422));
        }
        ////?
        $author->delete();
        return response()->json(['message' => 'Auteur succesvol verwijderd']);
    }
}
