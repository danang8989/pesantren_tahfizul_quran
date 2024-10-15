<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Student};


class DashboardController extends Controller
{
    public function index(){
        $student_approved = Student::where('is_approved', 1)->count();
        $student = Student::where('is_approved', 0)->count();

        return view('apps.admin.dashboard')->with('student_approved', $student_approved)->with('student', $student);
    }
}
