<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Student, StudentFile, Department};
use Illuminate\Support\Facades\File;
use Session;

class StudentFileController extends Controller
{
    public function index(){
        $student = Student::where('email', auth()->user()->email)->first();
        $student_file = StudentFile::where('student_id', $student->id)->first();

        if ($student_file == null) {
            $student_file = StudentFile::create([
                'fc_report' => null,
                'fc_kk' => null,
                'fc_skhu' => null,
                'fc_akte' => null,
                'fc_photo' => null,
                'student_id' => $student->id
            ]);
        }

        return view('apps.user.student_file.index')->with('student_file', $student_file);
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
        $data = $request->all();

        if ($request->hasFile('fc_kk')) { // apakah user mau edit gambarnya???
            // iya nih aku mau ganti gambar
            // hapus file
            File::delete('img_assets/fc_kk/'.$student_file->fc_kk);

            // buat file baru
            $image = $request->file('fc_kk');
            $file_name = $image->getClientOriginalName();
            $file_size = $image->getSize();
            $file_type = $image->getClientOriginalExtension();
    
            $destinationPath = 'img_assets/fc_kk';
            $image->move($destinationPath, $file_name);

            $data['fc_kk'] = $file_name;
        }

        if ($request->hasFile('fc_skhu')) { // apakah user mau edit gambarnya???
            // iya nih aku mau ganti gambar
            // hapus file
            File::delete('img_assets/fc_skhu/'.$student_file->fc_skhu);

            // buat file baru
            $image = $request->file('fc_skhu');
            $file_name = $image->getClientOriginalName();
            $file_size = $image->getSize();
            $file_type = $image->getClientOriginalExtension();
    
            $destinationPath = 'img_assets/fc_skhu';
            $image->move($destinationPath, $file_name);

            $data['fc_skhu'] = $file_name;
        }

        if ($request->hasFile('fc_akte')) { // apakah user mau edit gambarnya???
            // iya nih aku mau ganti gambar
            // hapus file
            File::delete('img_assets/fc_akte/'.$student_file->fc_akte);

            // buat file baru
            $image = $request->file('fc_akte');
            $file_name = $image->getClientOriginalName();
            $file_size = $image->getSize();
            $file_type = $image->getClientOriginalExtension();
    
            $destinationPath = 'img_assets/fc_akte';
            $image->move($destinationPath, $file_name);

            $data['fc_akte'] = $file_name;
        }

        if ($request->hasFile('fc_report')) { // apakah user mau edit gambarnya???
            // iya nih aku mau ganti gambar
            // hapus file
            File::delete('img_assets/fc_report/'.$student_file->fc_report);

            // buat file baru
            $image = $request->file('fc_report');
            $file_name = $image->getClientOriginalName();
            $file_size = $image->getSize();
            $file_type = $image->getClientOriginalExtension();
    
            $destinationPath = 'img_assets/fc_report';
            $image->move($destinationPath, $file_name);

            $data['fc_report'] = $file_name;
        }

        if ($request->hasFile('fc_photo')) { // apakah user mau edit gambarnya???
            // iya nih aku mau ganti gambar
            // hapus file
            File::delete('img_assets/fc_photo/'.$student_file->fc_photo);

            // buat file baru
            $image = $request->file('fc_photo');
            $file_name = $image->getClientOriginalName();
            $file_size = $image->getSize();
            $file_type = $image->getClientOriginalExtension();
    
            $destinationPath = 'img_assets/fc_photo';
            $image->move($destinationPath, $file_name);

            $data['fc_photo'] = $file_name;
        }

        $student_file->update($data);

        Session::flash('flash_message', 'Data telah diubah');
        return redirect()->route('user.student_file');
    }
}
