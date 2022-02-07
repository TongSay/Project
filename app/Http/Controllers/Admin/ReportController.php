<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreReportRequest;

use App\Models\Report;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     * 
     */

    public function report()
    {
        $title = 'Reports';

        $reports = Report::latest()->paginate(8);

      return view('report.index',compact('reports','title'));
    }

    public function index()
    {
       $reports = Report::all();

       return view('admin.report.index', compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.report.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReportRequest $request)
    {
        
        
        $data = $request->all();

        if($request->file('file')) {
            $file = $request->file('file');
            $filename = time().'_'.$file->getClientOriginalName();
   
            // File upload location
           // $location = 'files';
   
            // Upload file
            $file->move(public_path('Files'),$filename);
        }

        if($request->hasFile('image')){
            $image = $request->image->hashName();
            $request->image->move(public_path('Files/Cover'),$image);
        }else{
            $image = 'pdf.png';
        }

        //$data =  $request->file->store('public');
        $data['id_user'] = auth()->user()->id;

        $data['file'] = $filename;
        $data['image']=$image;
       
        Report::create($data);
        return redirect()->back()->with('message','Report created Successfully!');
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
        $report = Report::find($id);

        return view('admin.report.edit', compact('report'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $report = Report::find($id);

        if($request->file('file')) {
            $file = $request->file('file');
            $filename = time().'_'.$file->getClientOriginalName();
   
            // File upload location
           // $location = 'files';
   
            // Upload file
            $file->move(public_path('Files'),$filename);
        }else{
            $filename = $report->file;
        }

        if($request->hasFile('image')){
            $image = $request->image->hashName();
            $request->image->move(public_path('Files/Cover'),$image);
        }else{
            $image = $report->image;
        }

        //$data =  $request->file->store('public');
        $data['id_user'] = auth()->user()->id;
        $data['file'] = $filename;
        $data['image']=$image;

        $report->update($data);

        return redirect(route('reports.index'))->with('message','Report Updated Successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $report = Report::find($id);
            $report->delete();
            return redirect(route('reports.index'))->with('message','Report Deleted Successfully!');
    }
}
