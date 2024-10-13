<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    function index()
    {
        $contacts = Contact::all();

        return view('index', ['contacts' => $contacts]);
    }

    function create()
    {
        return view('create');
    }

    function store(Request $request)
    {
        Contact::create([
            'name' => $request['name'],
            'address' => $request['address'],
            'phone' => $request['phone'],
        ]);
        return redirect('/');
    }

    function edit(Request $request,int $id)
    {
        $contact = Contact::find($id);

        return view('create',['contact' => $contact]);
    }

    function update(Request $request,int $id)
    {
        $contact = Contact::find($id);

        $contact->name = $request['name'];
        $contact->address = $request['address'];
        $contact->phone = $request['phone'];

        $contact->save();

        return redirect('/');
    }
}
