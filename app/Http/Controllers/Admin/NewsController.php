<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{News, NewsCategory};
use Session;
use Illuminate\Support\Facades\File;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::get();

        return view('apps.admin.news.index')->with('news', $news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $news_category = NewsCategory::get();
        return view('apps.admin.news.create')->with('news_category', $news_category);
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
        $destinationPath = 'img_assets/news';
        $image->move($destinationPath, $file_name);
        
        $data['image'] = $file_name;
        $news = News::create($data);

        Session::flash('flash_message', 'Data telah ditambah');
        return redirect()->route('admin.news');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {   
        $news_category = NewsCategory::get();
        return view('apps.admin.news.edit')->with('news', $news)->with('news_category', $news_category);
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
        $news = News::findOrFail($request->id); 
        $data = $request->all();

        if ($request->hasFile('image')) { // apakah user mau edit gambarnya???
            // iya nih aku mau ganti gambar
            // hapus file
            File::delete('img_assets/news/'.$news->image);

            // buat file baru
            $image = $request->file('image');
            $file_name = $image->getClientOriginalName();
            $file_size = $image->getSize();
            $file_type = $image->getClientOriginalExtension();
    
            $destinationPath = 'img_assets/news';
            $image->move($destinationPath, $file_name);

            $data['image'] = $file_name;
        }

        $news->update($data);

        Session::flash('flash_message', 'Data telah diubah');
        return redirect()->route('admin.news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $news = News::findOrFail($request->id);
        $news->delete();
        
        return redirect()->back();
    }
}
