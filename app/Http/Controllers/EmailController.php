<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Emails;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function createEmail(Request $request): \Illuminate\Http\RedirectResponse
    {
        $email = new Emails();
        $email->name = $request->input('name');
        $email->contacts = $request->input('contacts');
        $email->text = $request->input('text');

        $email->save();
        return redirect()->route('email')->with('success', 'Your letter has been sent!');
    }

    public function getEmail(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $emails= Emails::query()->get();
        return view('contacts', ['emails'=>$emails]);
    }
    public function deleteEmail($id)
    {
        Emails::find($id)->delete();
        return redirect()->route('contacts');
    }
}
