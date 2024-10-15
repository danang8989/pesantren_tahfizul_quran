<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{News, About, Contact};

class ExtrakurikulerController extends Controller
{
    public function index(){
        $news = News::where('news_category_id', 3)->get();
        $contact = Contact::first();
        $about = About::first();

        return view('apps.web.extrakurikuler')->with('news', $news)   
                                    ->with('about', $about)
                                    ->with('contact', $contact);
    }
}
