<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Romtest, Contact, About};

class PpdbController extends Controller
{
    public function requirement(){
        $contact = Contact::first();
        $about = About::first();

        return view('apps.web.requirement')->with('about', $about)
                                           ->with('contact', $contact);
    }

    public function announcement(){
        $announcement = Romtest::get();
        $contact = Contact::first();
        $about = About::first();

        return view('apps.web.announcement')->with('announcement', $announcement)   
                                    ->with('about', $about)
                                    ->with('contact', $contact);
    }
}
