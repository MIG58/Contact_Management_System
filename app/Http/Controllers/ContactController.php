<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    // index working fine
    public function index(){
        $contact_data = Contact::all();

        return view('contacts.index',compact('contact_data'));
    }

    // create working fine
    public function create(){
        
        return view('contacts.create');
    }

    // store working fine
    public function store( Request $request){ 

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required'
        ]);

        Contact::create($request->all()); // This below code is creating a new database record using the Eloquent ORM in Laravel
        return redirect()->route('contacts.index')->with('success','Contact Added Successfully');
    }

    // show working fine
    public function show($id)
    {
        $cdata = Contact::findOrFail($id);
        return view('contacts.show', compact('cdata'));
    }

    // destroy working fine
    public function destroy($id)
    {
        $user = Contact::findOrFail($id);
        $user->delete();

        return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully.');
    }

    // edit working fine
    public function edit($id)
    {
        $cdata = Contact::findOrFail($id);
        return view('contacts.edit', compact('cdata'));
    }

    // update working fine
    public function update(Request $request, $id)
{
    $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'address' => 'required',
        'city' => 'required'
    ]);

    $cdata = Contact::findOrFail($id);
    $cdata->update($request->all());

    return redirect()->route('contacts.index')->with('success','Contact Updated Successfully');
}


}
