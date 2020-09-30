<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function index() {
        $contacts = Contact::orderBy('created_at', 'DESC')->paginate(10);

        return view('admin.contact.index', ['contacts' => $contacts]);
    }

    public function show(Contact $contact ) {
        
        return view('admin.contact.show', ['contact' => $contact]);
    }

    public function confirm(Contact $contact)
    {
        return view('admin.contact.confirm', ['contact' => $contact]);
    }

    public function destroy(Request $request, Contact $contact) 
    {
        $contact->delete();

        return redirect()->route('admin.contacts.index');
    }

    public function search(Request $request) {

        $keyword_name     = $request->input('keyword_name');
        $keyword_email     = $request->input('keyword_email');

        $query = Contact::query();

        if(!empty($keyword_name)) {
            $query->where('name', 'LIKE', "%{$keyword_name}%");
        }
        if(!empty($keyword_email)) {
            $query->where('email', 'LIKE', "%{$keyword_email}%");
        }

        $contacts = $query->get()->sortByDesc('created_at');

        return view('admin.contact.search', [
            'keyword_name'  => $keyword_name,
            'keyword_email' => $keyword_email,
            'contacts'      => $contacts
        ]);
    }
}
