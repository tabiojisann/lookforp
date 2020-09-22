<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Contact;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function index()
    {
        return view('footer.contact.index');
    }

    public function confirm(ContactRequest $request, Contact $contact)
    {
        $contact->fill($request->all());

        return view('footer.contact.confirm', ['contact' => $contact]);
    }

    public function send(ContactRequest $request, Contact $contact)
    {
        $contact->fill($request->all());
        $contact->save();

        Mail::to($contact->email)->send(new ContactMail('mails.contact', 'お問い合わせありがとうございます', $contact));

        return redirect()->route('contact.complete');
    }

    public function complete()
    {
        return view('footer.contact.complete');
    }

    
}
