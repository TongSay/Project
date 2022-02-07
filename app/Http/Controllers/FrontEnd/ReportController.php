<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Report;

class ReportController extends Controller
{
    public function report()
    {
        $title = 'Reports';

        $reports = Report::latest()->paginate(8);

      return view('frontend.report.index',compact('reports','title'));
    }
}
