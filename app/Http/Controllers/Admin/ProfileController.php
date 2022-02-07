<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.user.profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.user.profile');
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
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|string|email',
            'department_id'=>'required',
            'role_id'=>'required',
            'image'=>'mimes:jpeg,jpg,png',
            'start_from'=>'required',
            'designation'=>'required'
        ]);
        $data = $request->all();
        $user = auth()->user()->id;
        if($request->hasFile('image')){
            $image = $request->image->hashName();
            $request->image->move(public_path('profile'),$image);
        }else{
            $image = auth()->user()->image;
        }
        if($request->password){
            $password = $request->password;
            $new_password = bcrypt($password);
        }
        else{
            $new_password = auth()->user()->password;
        }

        $data['image']=$image;
        
        $data['password']=$new_password;

        auth()->user()->update($data);
        return redirect()->back()->with('message','Profile Updated Successfully!');
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
