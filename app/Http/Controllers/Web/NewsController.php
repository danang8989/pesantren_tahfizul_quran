<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{News, About, Contact};

class NewsController extends Controller
{
    public function index(){
        $news = News::where('news_category_id', 2)->get();
        $contact = Contact::first();
        $about = About::first();

        return view('apps.web.news')->with('news', $news)   
                                    ->with('about', $about)
                                    ->with('contact', $contact);
    }

    public function detail(News $news){
        $contact = Contact::first();
        $about = About::first();
        
        return view('apps.web.detail_article')->with('news', $news)
                                           ->with('about', $about)
                                           ->with('contact', $contact);
    }
}
