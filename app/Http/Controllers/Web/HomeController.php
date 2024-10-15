<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Carousel, About, News, Contact, Department};

class HomeController extends Controller
{
    public function index(){
        $carousel = Carousel::get();
        $about = About::first();
        $news = News::limit(4)->get();
        $department = Department::get();
        $contact = Contact::first();

        return view('apps.web.home')->with('carousel', $carousel)
                                     ->with('about', $about)
                                     ->with('department', $department)
                                     ->with('news', $news)
                                     ->with('contact', $contact);
    }
}
