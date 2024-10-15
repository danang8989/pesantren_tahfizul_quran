<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Session;
use App\Models\{Student, StudentParent, StudentFile, About, Contact, Department};

class FormDataController extends Controller
{
    public function index(){
        $about = About::first();
        $contact = Contact::first();

        $department = Department::get();
        $student = Student::where('email', auth()->user()->email)->first(); 
        $student_file = StudentFile::where('student_id', $student->id)->first();
        $student_parent = StudentParent::where('student_id', $student->id)->first();

        return view('apps.user.data')->with('student', $student)
                                     ->with('student_file', $student_file)
                                     ->with('student_parent', $student_parent)
                                     ->with('department', $department)
                                     ->with('about', $about)
                                     ->with('contact', $contact);
    }

    public function insert(Request $request){
        $student = Student::where('email', auth()->user()->email)->first(); 
        $student_data = $request->all();

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

            $student_data['photo'] = $file_name;
        }

        $student->update([
            'name' => $request->name,
            'address' => $request->address,
            'date_birth' => $request->date_birth,
            'phone_number' => $request->phone_number,
            'postal_code' => $request->postal_code,
            'kids_order' => $request->kids_order,
            'nisn' => $request->nisn,
            'photo' => $student_data['photo'],
        ]);

        // student file

        if ($request->hasFile('fc_kk')) { 

            // buat file baru
            $image = $request->file('fc_kk');
            $file_name = $image->getClientOriginalName();
            $file_size = $image->getSize();
            $file_type = $image->getClientOriginalExtension();
    
            $destinationPath = 'img_assets/fc_kk';
            $image->move($destinationPath, $file_name);

            $student_data['fc_kk'] = $file_name;
        }

        if ($request->hasFile('fc_skhu')) { 
            // buat file baru
            $image = $request->file('fc_skhu');
            $file_name = $image->getClientOriginalName();
            $file_size = $image->getSize();
            $file_type = $image->getClientOriginalExtension();
    
            $destinationPath = 'img_assets/fc_skhu';
            $image->move($destinationPath, $file_name);

            $student_data['fc_skhu'] = $file_name;
        }

        if ($request->hasFile('fc_akte')) { // apakah user mau edit gambarnya???            
            // buat file baru
            $image = $request->file('fc_akte');
            $file_name = $image->getClientOriginalName();
            $file_size = $image->getSize();
            $file_type = $image->getClientOriginalExtension();
    
            $destinationPath = 'img_assets/fc_akte';
            $image->move($destinationPath, $file_name);

            $student_data['fc_akte'] = $file_name;
        }

        if ($request->hasFile('fc_report')) { // apakah user mau edit gambarnya???

            // buat file baru
            $image = $request->file('fc_report');
            $file_name = $image->getClientOriginalName();
            $file_size = $image->getSize();
            $file_type = $image->getClientOriginalExtension();
    
            $destinationPath = 'img_assets/fc_report';
            $image->move($destinationPath, $file_name);

            $student_data['fc_report'] = $file_name;
        }

        if ($request->hasFile('fc_photo')) { // apakah user mau edit gambarnya???

            // buat file baru
            $image = $request->file('fc_photo');
            $file_name = $image->getClientOriginalName();
            $file_size = $image->getSize();
            $file_type = $image->getClientOriginalExtension();
    
            $destinationPath = 'img_assets/fc_photo';
            $image->move($destinationPath, $file_name);

            $student_data['fc_photo'] = $file_name;
        }

        $student_file = StudentFile::where('student_id', $student->id)->first();

        if ($student_file != null) {
            $student_file->update([
                'fc_report' => $request->hasFile('fc_photo') ? $student_data['fc_rapot'] : $student_file->fc_report,
                'fc_kk' => $request->hasFile('fc_kk') ? $student_data['fc_kk'] : $student_file->fc_kk,
                'fc_skhu' => $request->hasFile('fc_skhu') ? $student_data['fc_skhu'] : $student_file->fc_skhu,
                'fc_akte' => $request->hasFile('fc_akte') ? $student_data['fc_akte'] : $student_file->fc_akte,
                'fc_photo' => $request->hasFile('fc_photo') ? $student_data['fc_photo'] : $student_file->fc_photo,
                'student_id' => $student->id,
            ]);
        }else{
            StudentFile::create([
                'fc_report' => $request->fc_rapot,
                'fc_kk' => $request->fc_kk,
                'fc_skhu' => $request->fc_skhu,
                'fc_akte' => $request->fc_akte,
                'fc_photo' => $request->fc_photo,
                'student_id' => $student->id,
            ]);
        }

        // student parent

        $student_parent = StudentParent::where('student_id', $student->id)->first();

        if ($student_parent == null) {
            $student_parent = StudentParent::create([
                'father_name' => $request->father_name,
                'mother_name' => $request->mother_name,
                'father_date_birth' => $request->father_date_birth,
                'mother_date_birth' => $request->mother_date_birth,
                'father_la' => $request->father_la,
                'mother_la' => $request->mother_la,
                'father_occ' => $request->father_occ,
                'mother_occ' => $request->mother_occ,
                'student_id' => $student->id
            ]);
        }else{
            $student_parent->update([
                'father_name' => $request->father_name,
                'mother_name' => $request->mother_name,
                'father_date_birth' => $request->father_date_birth,
                'mother_date_birth' => $request->mother_date_birth,
                'father_la' => $request->father_la,
                'mother_la' => $request->mother_la,
                'father_occ' => $request->father_occ,
                'mother_occ' => $request->mother_occ,
                'student_id' => $student->id
            ]);
        }

        return redirect()->back();
    }
}
