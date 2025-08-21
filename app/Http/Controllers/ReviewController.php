<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\ReviewResource;
use App\Models\Review;
use App\Http\Requests\StoreReviewRequest;
use App\Models\Book;

class ReviewController extends Controller
// TODO: opmaak kan nog beter, zoals whitelines verwijderen. Gebruik evt. een formatter om dit automatisch te laten doen

{
    public function index(Book $book){
        return ReviewResource::collection($book->reviews);
    }
    
    public function store(StoreReviewRequest $request) {
        $review = Review::create($request->validated());
    
        $reviews = Review::all();
        return ReviewResource::collection($reviews);

        
    }

    public function update(StoreReviewRequest $request, Review $review) {
        $review->update($request->validated());
        $reviews = Review::all();
        return ReviewResource::collection($reviews);
    }


    public function destroy(Review $review) {
        $review->delete();
        return response()->json(['message' => 'Review succesvol verwijderd']);
    }
}
