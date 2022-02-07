<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\StoreLoanTypeRequest;

use App\Http\Requests\UpdateLoanTypeRequest;

use Illuminate\Http\Request;

use App\Models\LoanType;

class LoanTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locale = app()->getLocale();
        $loantypes = LoanType::latest()->paginate();

        return view('admin.loantype.index',compact('loantypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.loantype.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\StoreLoanTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLoanTypeRequest $request)
    {
        LoanType::create($request->validated());
            
        return redirect()->back()->with('message','Loan Types  created Successfully!');
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
        $loantype = LoanType::find($id);

        return view('admin.loantype.edit', compact('loantype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLoanTypeRequest $request, $id)
    {
        

        $data = LoanType::find($id);
        
        $data->update($request->validated());

        return redirect(route('loantypes.index'))->with('message','Type Loan Updated Successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $loantype = LoanType::find($id);
        $loantype->delete();

        return redirect()->back()->with('message', 'Type Loan Deleted Successfully!');
    }

    
}
