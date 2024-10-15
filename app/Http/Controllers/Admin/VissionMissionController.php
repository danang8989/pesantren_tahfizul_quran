<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VissionMission;
use Session;

class VissionMissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vission_mission = VissionMission::get();

        return view('apps.admin.vission_mission.index')->with('vission_mission', $vission_mission);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('apps.admin.vission_mission.create');
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

        $vission_mission = VissionMission::create($data);

        Session::flash('flash_message', 'Data telah ditambah');
        return redirect()->route('admin.vission_mission');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(VissionMission $vission_mission)
    {
        $vission_mission = VissionMission::findOrFail($vission_mission->id);
        
        return view('apps.admin.vission_mission.edit')->with('vission_mission', $vission_mission);
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
        $vission_mission = VissionMission::findOrFail($request->id); 
        $data = $request->all();

        $vission_mission->update($data);

        Session::flash('flash_message', 'Data telah diubah');
        return redirect()->route('admin.vission_mission');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $vission_mission = VissionMission::findOrFail($request->id);
        $vission_mission->delete();
        
        return redirect()->back();
    }
}
