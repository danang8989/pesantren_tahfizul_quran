<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::first();

        if (empty($contact)) {
            $contact = Contact::create([
                'address' => 'Jl. xxxx',
                'email' => 'darulqolam@gmail.com',
                'phone_number' => '08xxxxxx'
            ]);
        }

        return view('apps.admin.contact.index')->with('contact', $contact);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = $request->all();
        $contact = Contact::findOrFail($request->id);

        $contact->update($data);
        return redirect()->back();
    }
}
