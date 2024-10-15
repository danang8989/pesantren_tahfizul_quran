<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrganizationStructure;
use Session;

class OrganizationStructureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organization_structure = OrganizationStructure::get();

        return view('apps.admin.organization_structure.index')->with('organization_structure', $organization_structure);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('apps.admin.organization_structure.create');
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
        $organization_structure = OrganizationStructure::create($data);

        Session::flash('flash_message', 'Data telah ditambah');
        return redirect()->route('admin.organization_structure');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(organization_structure $organization_structure)
    {
        $organization_structure = OrganizationStructure::findOrFail($organization_structure->id);
        
        return view('apps.admin.organization_structure.edit')->with('organization_structure', $organization_structure);
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
        $organization_structure = OrganizationStructure::findOrFail($request->id); 
        $data = $request->all();
        $organization_structure->update($data);

        Session::flash('flash_message', 'Data telah diubah');
        return redirect()->route('admin.organization_structure');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $organization_structure = OrganizationStructure::findOrFail($request->id);
        $organization_structure->delete();
        
        return redirect()->back();
    }
}
