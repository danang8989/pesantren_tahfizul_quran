<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Gallery};
use Session;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallery::get();

        return view('apps.admin.gallery.index')->with('gallery', $gallery);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('apps.admin.gallery.create');
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
        $destinationPath = 'img_assets/gallery';
        $image->move($destinationPath, $file_name);
        
        $data['image'] = $file_name;
        $gallery = Gallery::create($data);

        Session::flash('flash_message', 'Data telah ditambah');
        return redirect()->route('admin.gallery');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {   
        return view('apps.admin.gallery.edit')->with('gallery', $gallery);
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
        $gallery = Gallery::findOrFail($request->id); 
        $data = $request->all();

        if ($request->hasFile('image')) { // apakah user mau edit gambarnya???
            // iya nih aku mau ganti gambar
            // hapus file
            File::delete('img_assets/gallery/'.$gallery->image);

            // buat file baru
            $image = $request->file('image');
            $file_name = $image->getClientOriginalName();
            $file_size = $image->getSize();
            $file_type = $image->getClientOriginalExtension();
    
            $destinationPath = 'img_assets/gallery';
            $image->move($destinationPath, $file_name);

            $data['image'] = $file_name;
        }

        $gallery->update($data);

        Session::flash('flash_message', 'Data telah diubah');
        return redirect()->route('admin.gallery');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $gallery = Gallery::findOrFail($request->id);
        $gallery->delete();
        
        return redirect()->back();
    }
}
