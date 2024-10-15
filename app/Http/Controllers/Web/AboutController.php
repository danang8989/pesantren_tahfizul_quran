<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Contact, About};

class AboutController extends Controller
{
    public function index(){
        $about = About::first();
        $contact = Contact::first();

        return view('apps.web.about')->with('about', $about)
                                     ->with('contact', $contact);
    }
}
