<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Faker\Provider\sr_Latn_RS\Address;
use Illuminate\Http\Request;
use App\Mail;
use Illuminate\Mail\Mailables\Envelope;

class MailController extends Controller
{
    public function sendingMessage()
    {
        return new Envelope(
            from: new Address('kuminovv@inbox.ru', 'Jeffrey Way'),
            replyTo: [
                new Address('kuminovv@inbox.ru', 'Taylor Otwell'),
            ],
            subject: 'Order Shipped',
        );
    }
}
