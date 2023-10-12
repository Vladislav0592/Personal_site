<?php

namespace App\Http\Controllers;


use App\Http\Requests\AddReviewRequest;
use App\Models\Add_reviews;
use Illuminate\Support\Facades\DB;

class AddReviewController extends Controller
{
    public function addReview(AddReviewRequest $request): \Illuminate\Http\RedirectResponse
    {
        $review = new Add_reviews();
        $review->date = $request->input('date');
        $review->text = $request->input('text');
        $review->save();

        return redirect()->route('reviews');
    }

    public function getDataReviews(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $review = Add_reviews::orderBy('id', 'desc')->get();
        return view('reviews', ['reviews' => $review]);
    }

    public function showReviewForm($id)
    {
        $review = Add_reviews::find($id);
        return view('review-one-form', ['reviews' => $review]);
    }

    public function updateReview($id, AddReviewRequest $request): \Illuminate\Http\RedirectResponse
    {
        $review = Add_reviews::find($id);
        $review->date = $request->input('date');
        $review->text = $request->input('text');
        $review->save();

        return redirect()->route('reviews');
    }

    public function deleteReview($id)
    {
        Add_reviews::find($id)->delete();
        return redirect()->route('reviews')->with('success', 'Жень, ты удалил его!');
    }
}
