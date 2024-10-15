<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{OrganizationStructure, About, Contact};

class OrganizationStructureController extends Controller
{
    public function index(){
        $organization_structure = OrganizationStructure::first();
        $about = About::first();
        $contact = Contact::first();

        return view('apps.web.organization_structure')->with('about', $about)
                                                        ->with('organization_structure', $organization_structure)
                                                        ->with('contact', $contact);
    }
}
