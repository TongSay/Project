<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;

use App\Models\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function detail($id){

        $title = DB::table('news')->select('name');

        $new = News::find($id);

        $latestnews = News::latest()->paginate(3);

        return view('news.detail',compact('new','latestnews','title'));
    }
    public function news()
    {
        $title = 'News';

        $news = News::latest()->paginate(6);

        $latestnews = News::latest()->paginate(3);

        return view('news.index',compact('news','latestnews','title'));
     
    }
   
    public function index()
    {
        $news = News::latest()->paginate();

        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNewsRequest $request)
    {
        
        $data = $request->all();

        $data['id_user'] = auth()->user()->id;

        if($request->hasFile('image'))
        {
            $image = $request->image->hashName();
            $request->image->move(public_path('NewsPicture'),$image);
        }
        else
        {
            $image = 'placeholder.png';
        }
        $data['image']=$image;
        
        News::create($data);
        return redirect()->back()->with('message','News created Successfully!');
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
        $news = News::find($id);

        return view('admin.news.edit',compact('news'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNewsRequest $request, $id)
    {
        
        $news = News::find($id);
        $data = $request->all();
        $data['id_user'] = auth()->user()->id;

        if($request->hasFile('image')){
            $image = $request->image->hashName();
            $request->image->move(public_path('NewsPicture'),$image);
        }else{
            $image = $news->image;
        }
        $data['image']=$image;

        $news->update($data);
        return redirect(route('news.index'))->with('message','News updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect(route('news.index'))->with('message','News Deleted Successfully!');
    }
}
