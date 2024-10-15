<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{User, About, Contact, Student};

class ResultController extends Controller
{
    public function index(){
        $about = About::first();
        $contact = Contact::first();
        $student = Student::where('email', auth()->user()->email)->first();

        return view('apps.user.result')->with('about', $about)
                                       ->with('contact', $contact)
                                       ->with('student', $student);
    }
}
