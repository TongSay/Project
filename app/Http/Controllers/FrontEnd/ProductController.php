<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Loan;
use App\Models\LoanType;

class ProductController extends Controller
{
    public function index(){

        $title = 'Products & Services';

        $loans = Loan::latest()->paginate();
        return view('frontend.product.index',compact('loans','title'));
    }

    public function detail($id){

        $title = 'Product Detail';


        $loan = Loan::find($id);
        
        $typeloans = LoanType::latest()->paginate();
      
        return view('frontend.product.detail',compact('loan','typeloans','title'));
    }
}
