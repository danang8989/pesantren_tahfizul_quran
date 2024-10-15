<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::get();

        return view('apps.admin.student.index')->with('student', $student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $student = Student::findOrFail($student->id);
        
        return view('apps.admin.student.show')->with('student', $student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function isApproved(Request $request)
    {
        $student = Student::findOrFail($request->id); 
        $data = $request->all();

        $student->update([
            'is_approved' => 1
        ]);

        Session::flash('flash_message', 'Data telah diubah');
        return redirect()->route('admin.student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $student = Student::findOrFail($request->id);
        $student->delete();
        
        return redirect()->back();
    }
}
