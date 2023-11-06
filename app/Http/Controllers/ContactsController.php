<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactsRequest;
use App\Mail\Letters;
use App\Models\Emails;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\Contacts;

class ContactsController extends Controller
{
    public function createEmail(ContactsRequest$request): \Illuminate\Http\RedirectResponse
    {
        $email = new Emails();
        $email->name = $request->input('name');
        $email->contacts = $request->input('contacts');
        $email->text = $request->input('message');
        $message=[$email->name,$email->contacts, $email->text];
        $result=implode(' ; ', $message);

        Mail::raw( $result, fn ($message)=> $message->to("evgenebaev@gmail.com"));
        $email->save();
        return redirect()->route('contacts')->with('success', 'Your letter has been sent!');
    }

    public function getEmail(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $emails= Emails::query()->orderBy('id', 'desc')->get();
        return view('contacts', ['emails'=>$emails]);
    }
    public function deleteEmail($id)
    {
        Emails::find($id)->delete();
        return redirect()->route('contacts');
    }
}
