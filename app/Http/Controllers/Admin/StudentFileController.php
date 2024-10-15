<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Student, StudentFile};
use Session;

class StudentFileController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student_file = StudentFile::get();

        return view('apps.admin.student_file.index')->with('student_file', $student_file);
    }

    public function show(StudentFile $student_file){
        return view('apps.admin.student_file.show')->with('student_file', $student_file);
    }

       /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        $news = News::findOrFail($news->id);
        
        return view('apps.admin.news.edit')->with('news', $news);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $student_file = StudentFile::findOrFail($request->id); 
        $student = Student::findOrFail($student_file->student_id);

        $student->update([
            'is_approved' => $request->is_approved
        ]);

        Session::flash('flash_message', 'Data telah diubah');
        return redirect()->route('admin.student_file');
    }
    
}
