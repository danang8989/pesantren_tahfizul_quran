<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{About, Contact, Student, Romtest, StudentFile, StudentParent};

class HomeController extends Controller
{
    public function index(){
        $student = Student::where('email', auth()->user()->email)->first();
        $announcement = Romtest::get();
        $contact = Contact::first();
        $about = About::first();
        
        return view('apps.user.home')->with('student', $student)
                                     ->with('announcement', $announcement)
                                     ->with('about', $about)
                                     ->with('contact', $contact);
    }
}
