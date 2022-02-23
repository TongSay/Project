<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Notifications\CompliantNotification;
use Carbon\Carbon;
use App\Models\Compliant;
use App\Models\MediaCompliant;
use RealRashid\SweetAlert\Facades\Alert;

class CompliantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function applyedcompliant(){
        $applycompliants = Compliant::latest()->paginate();

        return view('admin.compliant.applyedcompliant',compact('applycompliants'));
    }


    public function viewapplyedcompliant (Request $request, $id){

        if ($id) {

            $viewapplyedcompliant = Compliant::find($id);

            
            $files = MediaCompliant::all();

            $date = Carbon::now();

           
            $data['read_at'] = $date;

            $viewapplyedcompliant->update($data);

        }

        

        return view('admin.compliant.viewapplyedcompliant', compact('viewapplyedcompliant','files'));
    }

    public function applycompliant()
    {

        $title = "Compliant"; 

        if (session('success_message'))
        {
            Alert::success('Success!', session('success_message'));
        }
      
        
        return view('frontend.compliant.applycompliant', compact('title'));
 
   }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storecompliant(Request $request)
    {

        
        $compliants = Compliant::create([
            'name'=>$request->get('name'),
            'id_loan_type'=>$request->get('id_loan_type'),
            'email'=>$request->get('email'),
            'phone'=>$request->get('phone'),
            // 'date'=>$request->get('date'),
            'subject'=>$request->get('subject'),
            'compliant_description'=>$request->get('compliant_description'),
           

        ]);



       if($request->hasFile('photos'))
        {
        
            $allowedfileExtension=['pdf','jpg','png','docx'];
            $files = $request->file('photos');
            foreach($files as $file)
            {

                $name = time().rand(1,100).'.'.$file->extension();
                $file->move(public_path('Media/File_Compliant'),$name);  
                $files[] = $name;
                
                    MediaCompliant::create([
                        'id_compliant' => $compliants->id,
                        'filename' => $name
                    ]);
            }
        }

      

       if ($compliants) {

        $compliants->notify( new CompliantNotification($compliants));

       }

       
        return redirect()->back()->withSuccessMessage(__('alert.CompliantSubmit'));
   
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function aprove(Request $request, $id)
    {
        $compliant = Compliant::find($id);
        $data['status'] = $request->get('status');

        $data['message'] = $request->get('message');

        $compliant->update($data);

        return redirect()->back();
    }


    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
