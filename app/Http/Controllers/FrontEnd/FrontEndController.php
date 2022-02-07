<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\News;

use App\Models\Loan;

class FrontEndController extends Controller
{
    public function homepage()
    {
        $title = 'Borribo Microfinance Institution PLC';

        $news = News::latest()->paginate(6);

        $loans = Loan::latest()->paginate(3);

     
        return view('welcome',compact('news','loans', 'title'));
    }
}
