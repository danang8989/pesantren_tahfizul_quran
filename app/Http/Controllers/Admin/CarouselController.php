<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carousel;
use Session;
use Illuminate\Support\Facades\File;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carousel = Carousel::get();

        return view('apps.admin.carousel.index')->with('carousel', $carousel);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('apps.admin.carousel.create');
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
        $destinationPath = 'img_assets/carousel';
        $image->move($destinationPath, $file_name);
        
        $data['image'] = $file_name;
        $carousel = Carousel::create($data);

        Session::flash('flash_message', 'Data telah ditambah');
        return redirect()->route('admin.carousel');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Carousel $carousel)
    {
        $carousel = Carousel::findOrFail($carousel->id);
        
        return view('apps.admin.carousel.edit')->with('carousel', $carousel);
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
        $carousel = Carousel::findOrFail($request->id); 
        $data = $request->all();

        if ($request->hasFile('image')) { // apakah user mau edit gambarnya???
            // iya nih aku mau ganti gambar
            // hapus file
            File::delete('img_assets/carousel/'.$carousel->image);

            // buat file baru
            $image = $request->file('image');
            $file_name = $image->getClientOriginalName();
            $file_size = $image->getSize();
            $file_type = $image->getClientOriginalExtension();
    
            $destinationPath = 'img_assets/carousel';
            $image->move($destinationPath, $file_name);

            $data['image'] = $file_name;
        }

        $carousel->update($data);

        Session::flash('flash_message', 'Data telah diubah');
        return redirect()->route('admin.carousel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $carousel = Carousel::findOrFail($request->id);
        $carousel->delete();
        
        return redirect()->back();
    }
}
