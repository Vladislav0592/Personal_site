<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function allData()
    {
        $review=Review::orderBy('id', 'desc')->get();
        return view('all_messages', ['reviews'=>$review]);
    }
    public function deleteMessage($id): \Illuminate\Http\RedirectResponse
    {
        Review::find($id)->delete();
        return redirect()->route('all_messages');
    }
}


