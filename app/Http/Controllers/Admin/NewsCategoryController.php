<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NewsCategory;
use Session;

class NewsCategoryController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news_category = NewsCategory::get();

        return view('apps.admin.news_category.index')->with('news_category', $news_category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('apps.admin.news_category.create');
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

        $news_category = NewsCategory::create($data);

        Session::flash('flash_message', 'Data telah ditambah');
        return redirect()->route('admin.news_category');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsCategory $news_category)
    {
        $news_category = NewsCategory::findOrFail($news_category->id);
        
        return view('apps.admin.news_category.edit')->with('news_category', $news_category);
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
        $news_category = NewsCategory::findOrFail($request->id); 
        $data = $request->all();

        $news_category->update($data);

        Session::flash('flash_message', 'Data telah diubah');
        return redirect()->route('admin.news_category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $news_category = NewsCategory::findOrFail($request->id);
        $news_category->delete();
        
        return redirect()->back();
    }
}
