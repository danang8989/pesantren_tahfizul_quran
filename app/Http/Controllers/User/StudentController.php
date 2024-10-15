<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Student, Village, Regency, Subdistrict, Department};
use Illuminate\Support\Facades\File;
use Session;

class StudentController extends Controller
{
    public function index(){
        $student = Student::where('email', auth()->user()->email)->first();
        $village = Village::get();
        $regency = Regency::get();
        $subdistrict = Subdistrict::get();
        $department = Department::get();

        return view('apps.user.student.index')->with('student', $student)
                                              ->with('village', $village)
                                              ->with('regency', $regency)
                                              ->with('department', $department)
                                              ->with('subdistrict', $subdistrict);
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
        $student = Student::findOrFail($request->id); 
        $data = $request->all();

        if ($request->hasFile('photo')) { // apakah user mau edit gambarnya???
            // iya nih aku mau ganti gambar
            // hapus file
            File::delete('img_assets/student/'.$student->image);

            // buat file baru
            $image = $request->file('photo');
            $file_name = $image->getClientOriginalName();
            $file_size = $image->getSize();
            $file_type = $image->getClientOriginalExtension();
    
            $destinationPath = 'img_assets/student';
            $image->move($destinationPath, $file_name);

            $data['photo'] = $file_name;
        }

        $student->update($data);

        Session::flash('flash_message', 'Data telah diubah');
        return redirect()->route('user.student');
    }
}
