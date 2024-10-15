<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Session;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::first();
        
        if ($about == null) {
            $about = About::create([
                'title' => 'Judul...',
                'description' => 'konten...',
                'image' => 'gambar.png',
                'video_url' => 'hhtps/'
            ]);
        }
        
        return view('apps.admin.about.index')->with('about', $about);
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
        $about = About::findOrFail($request->id); 
        $data = $request->all();

        if ($request->hasFile('image')) { // apakah user mau edit gambarnya???
            // iya nih aku mau ganti gambar
            // hapus file
            File::delete('img_assets/about/'.$about->image);

            // buat file baru
            $image = $request->file('image');
            $file_name = $image->getClientOriginalName();
            $file_size = $image->getSize();
            $file_type = $image->getClientOriginalExtension();
    
            $destinationPath = 'img_assets/about';
            $image->move($destinationPath, $file_name);

            $data['image'] = $file_name;
        }
        
        $about->update($data);

        Session::flash('flash_message', 'Data telah diubah');
        return redirect()->route('admin.about');
    }
}
