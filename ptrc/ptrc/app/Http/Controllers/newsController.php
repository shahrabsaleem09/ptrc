<?php

namespace App\Http\Controllers;

use App\Models\news;
use Illuminate\Http\Request;

class newsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $news = news::latest()->paginate(5);
    
        return view('admin/news.index',compact('news'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
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
        return view('admin/news.create');
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
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
    
        news::create($request->all());
     
        return redirect()->route('news.index')
                        ->with('success','News created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\news  $job
     * @return \Illuminate\Http\Response
     */
    public function show(news $news)
    {
        //
        return view('admin/news.show',compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\news  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(news $news)
    {
        //
        return view('admin/news.edit',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\news  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, news $news)
    {
        //
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
    
        $news->update($request->all());
    
        return redirect()->route('news.index')
                        ->with('success','News updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\news  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(news $news)
    {
        //
        
        $news->delete();
    
        return redirect()->route('news.index')
                        ->with('success','News deleted successfully');
    }
   
}
