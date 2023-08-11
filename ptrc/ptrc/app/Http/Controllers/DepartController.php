<?php

namespace App\Http\Controllers;
use App\Models\depart;

use Illuminate\Http\Request;

class DepartController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $depart = depart::latest()->paginate(5);
    
        return view('admin/depart.index',compact('depart'))
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
        return view('admin/depart.create');
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
            'deprt_name' => 'required',
        ]);
    
        depart::create($request->all());
     
        return redirect()->route('depart.index')
                        ->with('success','Department created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(depart $depart)
    {
        //
        return view('admin/depart.show',compact('depart'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(depart $depart)
    {
        //
        return view('admin/depart.edit',compact('depart'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, depart $depart)
    {
        //
        $request->validate([
            'deprt_name' => 'required',
        ]);
    
        $depart->update($request->all());
    
        return redirect()->route('depart.index')
                        ->with('success','Deaprtment updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(depart $depart)
    {
        //
        
        $depart->delete();
    
        return redirect()->route('depart.index')
                        ->with('success','Department deleted successfully');
    }
}
