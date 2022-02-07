<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $title = ' About Us';
       
        return view('frontend.about.index',compact('title'));
    }

    public function background()
    {
        $title = ' Background ';

        return view('frontend.about.background',compact('title'));
    }

    public function management()
    {
        $title = ' Management ';

        return view('frontend.about.management',compact('title'));
    }

    public function organizational()
    {
        $title = ' Organizational ';

        return view('frontend.about.organizational',compact('title'));
    }

    public function license()
    {
        $title = ' License ';

        return view('frontend.about.license',compact('title'));
    }
}
