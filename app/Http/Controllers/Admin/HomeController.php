<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Post;
use App\Models\News;
use App\Models\Job;
use App\Models\Loan;
use App\Models\Compliant;
use App\Models\ApplyJob;
use App\Models\ApplyLoan;
class HomeController extends Controller
{
    public function index()
    {
        $locale = app()->getLocale();
        $posts = Post::select(['id', 'title_' . $locale, 'full_text_' . $locale])
            ->latest()
            ->whereNotNull('title_' . $locale)
            ->where('title_' . $locale, '!=', '')
            ->take(10)
            ->get();


        $newsCount = News::all();

        $jobCount = Job::all();

        $loanCount = Loan::all();
    
        $compliantCount = Compliant::all();

        $applycompliants = Compliant::latest()->paginate(7);

        $applyjobCount = ApplyJob::all();

        $applyjobs = ApplyJob::latest()->paginate(7);

        $applyloanCount = ApplyLoan::all();

        $applyloan = ApplyLoan::latest()->paginate(7);

       

        return view('home', compact('posts','newsCount','jobCount','loanCount','compliantCount','applyjobCount','applyloanCount','applyloan','applyjobs','applycompliants',));
    }



   
}
