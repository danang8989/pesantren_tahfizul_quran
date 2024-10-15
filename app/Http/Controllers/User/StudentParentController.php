<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{StudentParent, Student};
use Session;

class StudentParentController extends Controller
{
    public function index(){
        $student = Student::where('email', auth()->user()->email)->first();
        $student_parent = StudentParent::where('student_id', $student->id)->first();

        if ($student_parent == null) {
            $student_parent = StudentParent::create([
                'father_name' => null,
                'mother_name' => null,
                'father_date_birth' => null,
                'mother_date_birth' => null,
                'father_la' => null,
                'mother_la' => null,
                'father_occ' => null,
                'mother_occ' => null,
                'student_id' => $student->id
            ]);
        }

        return view('apps.user.student_parent.index')->with('student_parent', $student_parent);
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
        $student_parent = StudentParent::findOrFail($request->id); 
        $data = $request->all();

        $student_parent->update($data);

        Session::flash('flash_message', 'Data telah diubah');
        return redirect()->route('user.student_parent');
    }
}
