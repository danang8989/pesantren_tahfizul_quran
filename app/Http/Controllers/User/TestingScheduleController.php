<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Romtest, Contact, About, Student};

class TestingScheduleController extends Controller
{
    public function index(){
        $student = Student::where('email', auth()->user()->email)->first();
        $student_id = $student->id;
        $announcement = Romtest::whereIn('id', function($query) use($student_id){
            $query->select('romtest_id')->from('student_romtests')->where('student_id', $student_id);
        })->first();

        $contact = Contact::first();
        $about = About::first();

        return view('apps.user.testing_schedule')->with('announcement', $announcement)   
                                            ->with('about', $about)
                                            ->with('contact', $contact);
    }
}
