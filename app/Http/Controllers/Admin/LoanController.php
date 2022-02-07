<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLoanRequest;
use App\Http\Requests\UpdateLoanRequest;
use Illuminate\Http\Request;
use App\Models\Loan;

class LoanController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locale = app()->getLocale();
        $loans = Loan::select(['id', 'id_loan_type', 'title_' . $locale, 'description_' . $locale])
            ->latest()
            ->whereNotNull('title_' . $locale)
            ->where('title_' . $locale, '!=', '')
            ->take(10)
            ->get();
        
        return view('admin.loan.index',compact('loans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.loan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLoanRequest $request)
    {
        $data = $request->all();

        $data['id_user'] = auth()->user()->id;

        if($request->hasFile('image')){
            $image = $request->image->hashName();
            $request->image->move(public_path('LoanPicture'),$image);
        }else{
            $image = 'placeholder.png';
        }
        $data['image']=$image;
        Loan::create($data);
       
        return redirect()->back()->with('message','Loan created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $loan = Loan::find($id);
        return view('admin.loan.edit',compact('loan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLoanRequest $request, $id)
    {
   
        $loan = Loan::find($id);
        
        $data = $request->all();

        $data['id_user'] = auth()->user()->id;

        if($request->hasFile('image')){
            $image = $request->image->hashName();
            $request->image->move(public_path('LoanPicture'),$image);
        }else{
            $image = $loan->image;
        }
        $data['image']=$image;

        
        $loan->update($data);

        return redirect(route('loans.index'))->with('message','Type Loan Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $loan = Loan::find($id);
        $loan->delete();
        return redirect(route('loans.index'))->with('message','Loan Deleted Successfully!');
    }
}
