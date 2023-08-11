<?php

namespace App\Http\Controllers;

use App\Models\testcenter;
use Illuminate\Http\Request;

class testCenterController extends Controller
{
    public function index()
    {
    
        $centers = testcenter::latest()->paginate(5);
    
        return view('admin/centers.index',compact('centers'))
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
        return view('admin/centers.create');
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
            'address' => 'required',
            'date_time' => 'required',
        ]);
    
        testcenter::create($request->all());
     
        return redirect()->route('centers.index')
                        ->with('success','Center created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(testcenter $center)
    {
        //
       // dd($center);
        return view('admin/centers.show',compact('center'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bank  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(testcenter $center)
    {
        //
       // dd($center);
       
        return view('admin/centers.edit',compact('center'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bank  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, testcenter $center)
    {
        //dd($request);
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'date_time' => 'required',
        ]);
    
        $center->update($request->all());
    
        return redirect()->route('centers.index')
                        ->with('success','Center updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(testcenter $center)
    {
        //
        
        $center->delete();
    
        return redirect()->route('centers.index')
                        ->with('success','Center deleted successfully');
    }
}
