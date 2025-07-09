<?php

namespace App\Exceptions;

use Exception;

use App\Models\Author;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Exceptions\HttpResponseException;

// public function destroy(Author $author)
// {
//     if ($author->books()->exists()) {
//         throw new HttpResponseException(response()->json([
//             'message' => 'Deze auteur kan niet worden verwijderd omdat er nog boeken aan gekoppeld zijn.'
//         ], 422));
//     }

//     $author->delete();
// }
