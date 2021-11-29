<?php
namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;

class ContactController extends Controller
{
    public function send(ContactRequest $request)
    {
        Mail::to(config('mail.contact'))
            ->send(new ContactMail(
                $request->input('name'),
                $request->input('email'),
                $request->input('message')
            ));

        return Response::json([]);
    }
}