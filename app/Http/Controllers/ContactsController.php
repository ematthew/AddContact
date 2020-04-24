<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Contact;

class ContactsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$user = Auth::user();
    	$contacts = Contact::all();
    	return view('welcome', compact('user', 'contacts'));
    }

    public function create()
    {
    	return view('create');
    }

    public function store(Request $request)
    {
    	

    	$contact 				= new Contact();
    	$contact->first_name 	= $request->first_name;
    	$contact->last_name 	= $request->last_name;
    	$contact->email 		= $request->email;
    	$contact->job_title 	= $request->job_title;
    	$contact->city 			= $request->city;
    	$contact->country 		= $request->country;
    	$contact->save();

    	return redirect('/')->with('success', 'contact saved!');
    }

    public function edit(Request $request, $id)
    {
    	$contact = Contact::find($id);
    	return view('edit2', compact('contact'));

    }

    public function update(Request $request, $id)
    {
    	$contact 				= Contact::find($id);
    	$contact->first_name 	= $request->first_name;
    	$contact->last_name 	= $request->last_name;
    	$contact->email 		= $request->email;
    	$contact->job_title 	= $request->job_title;
    	$contact->city 			= $request->city;
    	$contact->country 		= $request->country;
    	$contact->update();

    	return redirect('/')->with('success', 'contact has been updated!');
    }

    public function delete(Request $request, $id)
    {
    	$contact = Contact::find($id);
       	$contact->delete();

    	return redirect('/')->with('success', 'contact has been deleted!');
    }


}
