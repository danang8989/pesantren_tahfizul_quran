<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Romtest;
use Session;

class RomtestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $romtest = Romtest::get();

        return view('apps.admin.romtest.index')->with('romtest', $romtest);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('apps.admin.romtest.create');
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
        $romtest = Romtest::create($data);

        Session::flash('flash_message', 'Data telah ditambah');
        return redirect()->route('admin.romtest');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Romtest $romtest)
    {
        $romtest = Romtest::findOrFail($romtest->id);
        
        return view('apps.admin.romtest.edit')->with('romtest', $romtest);
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
        $romtest = Romtest::findOrFail($request->id); 
        $data = $request->all();
        $romtest->update($data);

        Session::flash('flash_message', 'Data telah diubah');
        return redirect()->route('admin.romtest');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $romtest = Romtest::findOrFail($request->id);
        $romtest->delete();
        
        return redirect()->back();
    }
}
