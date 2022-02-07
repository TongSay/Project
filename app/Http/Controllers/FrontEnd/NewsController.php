<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\News;

class NewsController extends Controller
{
    public function detail($id){

        $title = News::all();

        $new = News::find($id);

        $latestnews = News::latest()->paginate(3);

        return view('frontend.news.detail',compact('new','latestnews','title'));
    }
    public function news()
    {
        $title = 'News';

        $news = News::latest()->paginate(6);

        $latestnews = News::latest()->paginate(3);

        return view('frontend.news.index',compact('news','latestnews','title'));
     
    }
}
