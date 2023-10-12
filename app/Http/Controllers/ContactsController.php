<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactsRequest;
use App\Mail\Letters;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\Contacts;

class ContactsController extends Controller
{
    public function sendingMessage(ContactsRequest $request)
    {
        $recipient=DB::table('links')->select('email')->get();
        $data = new Contacts();
        $name = $data->name = $request->input('name');
        $email = $data->email = $request->input('email');
        $message = $data->message = $request->input('message');
        Mail::to($recipient)->send(new Letters($name, $email, $message))->with('success', 'Thanks for your email!');
    }
}
