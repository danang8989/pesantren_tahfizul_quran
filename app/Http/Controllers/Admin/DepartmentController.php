<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use Session;
use Illuminate\Support\Facades\File;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $department = Department::get();

        return view('apps.admin.department.index')->with('department', $department);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('apps.admin.department.create');
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

        $image = $request->file('image');

        $file_name = $image->getClientOriginalName();
        $file_size = $image->getSize();
        $file_type = $image->getClientOriginalExtension();

        // simpan gambar
        $destinationPath = 'img_assets/department';
        $image->move($destinationPath, $file_name);
        
        $data['image'] = $file_name;
        $news = Department::create($data);

        $department = Department::create($data);

        Session::flash('flash_message', 'Data telah ditambah');
        return redirect()->route('admin.department');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        $department = Department::findOrFail($department->id);
        
        return view('apps.admin.department.edit')->with('department', $department);
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
        $department = Department::findOrFail($request->id); 
        $data = $request->all();

        if ($request->hasFile('image')) { // apakah user mau edit gambarnya???
            // iya nih aku mau ganti gambar
            // hapus file
            File::delete('img_assets/department/'.$department->image);

            // buat file baru
            $image = $request->file('image');
            $file_name = $image->getClientOriginalName();
            $file_size = $image->getSize();
            $file_type = $image->getClientOriginalExtension();
    
            $destinationPath = 'img_assets/department';
            $image->move($destinationPath, $file_name);

            $data['image'] = $file_name;
        }

        $department->update($data);

        Session::flash('flash_message', 'Data telah diubah');
        return redirect()->route('admin.department');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $department = Department::findOrFail($request->id);
        $department->delete();
        
        return redirect()->back();
    }
}
