<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{VissionMission, About, Contact};

class VissionMissionController extends Controller
{
    public function index(){
        $vission = VissionMission::where('type', 'visi')->first();
        $mission = VissionMission::where('type', 'misi')->get();
        $about = About::first();
        $contact = Contact::first();

        return view('apps.web.vission_mission')->with('vission', $vission)
                                               ->with('mission', $mission)
                                               ->with('about', $about)
                                               ->with('contact', $contact);
    }
}
