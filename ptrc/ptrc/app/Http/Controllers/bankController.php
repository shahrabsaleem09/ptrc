<?php

namespace App\Http\Controllers;

use App\Models\bank;
use Illuminate\Http\Request;

class bankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $bank = bank::latest()->paginate(5);
    
        return view('admin/banks.index',compact('bank'))
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
        return view('admin/banks.create');
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
            'b_name' => 'required',
            'b_code' => 'required',
            'account_no' => 'required',
            'owner' => 'required',
        ]);
    
        bank::create($request->all());
     
        return redirect()->route('bank.index')
                        ->with('success','Banks created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(bank $bank)
    {
        //
        return view('admin/banks.show',compact('bank'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bank  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(bank $bank)
    {
        //
        return view('admin/banks.edit',compact('bank'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bank  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bank $bank)
    {
        //
        $request->validate([
            'b_name' => 'required',
            'b_code' => 'required',
            'account_no' => 'required',
            'owner' => 'required',
        ]);
    
        $bank->update($request->all());
    
        return redirect()->route('bank.index')
                        ->with('success','Bank updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(bank $bank)
    {
        //
        
        $bank->delete();
    
        return redirect()->route('bank.index')
                        ->with('success','Bank deleted successfully');
    }
}
