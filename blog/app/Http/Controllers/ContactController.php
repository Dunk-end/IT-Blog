<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $request) {

          $contact = new Contact();
          $contact->name = $request->input('name');
          $contact->email = $request->input('email');
          $contact->message = $request->input('message');

          $contact->save();

          return redirect()->route('home')->with('success', 'Сообщение было добавлено');
    }

    public function allData() {
        return view('messages', ['data' => Contact::all()]);
    }
}
