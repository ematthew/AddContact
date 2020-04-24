<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Contact;


class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function mysearch(Request $request)
    {
        if ($request->has('search')) {
            $contacts = Contact::search($request->get('search'))->get();
        }else{
            $contacts = Contact::get();
        }

        return view('welcome', compact('contacts'));
    }
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
