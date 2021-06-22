<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class SiteController extends Controller
{
    public function index()
    {
    	$models = Contact::all();
    	return view('index', ['models'=>$models]);
    }
}
