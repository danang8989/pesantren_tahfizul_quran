<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentParent;
use Session;

class StudentParentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student_parent = StudentParent::get();

        return view('apps.admin.student_parent.index')->with('student_parent', $student_parent);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $student_parent = StudentParent::findOrFail($request->id);
        $student_parent->delete();
        
        return redirect()->back();
    }
}
