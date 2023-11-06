<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReviewRequest;
use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    public function submit(ReviewRequest $request): \Illuminate\Http\RedirectResponse
    {
        $review = new Review();
        $review->review = $request->review;
        $review->save();

        return redirect()->route('reviews')->with('success', 'Thanks for your feedback!');
    }
}

