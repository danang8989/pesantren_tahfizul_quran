<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Contact, About, Gallery};

class GalleryController extends Controller
{
    public function index(){
        $gallery = Gallery::orderBy('id', 'desc')->get();
        $about = About::first();
        $contact = Contact::first();

        return view('apps.web.gallery')->with('gallery', $gallery)
                                       ->with('about', $about)
                                       ->with('contact', $contact);
    }
}
