<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{StudentRomtest, Romtest, Student};

class StudentRomtestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Romtest $romtest, Request $request)
    {
        $student_romtest = StudentRomtest::where('romtest_id', $romtest->id)->get();

        $student = Student::whereNotIn('id', function($query) use($romtest){
            $query->select('student_id')->from('student_romtests')->where('romtest_id', $romtest->id);
        })->get();

        return view('apps.admin.student_romtest.index')->with('student_romtest', $student_romtest)
                                              ->with('student', $student)
                                              ->with('romtest', $romtest);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insert(Request $request)
    {
        $data = $request->all();
        $student_romtest = StudentRomtest::create($data);

        Session::flash('flash_message', 'Data telah ditambah');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $student_romtest = StudentRomtest::findOrFail($request->id);
        $student_romtest->delete();
        
        return redirect()->back();
    }
}
