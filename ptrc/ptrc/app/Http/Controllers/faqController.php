<?php

namespace App\Http\Controllers;

use App\Models\faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class faqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
        $faqs = faq::latest()->paginate(5);
    
        return view('admin/faqs.index',compact('faqs'))
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
        return view('admin/faqs.create');
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
            'question' => 'required',
            'answer' => 'required',
        ]);
    
        faq::create($request->all());
     
        return redirect()->route('faqs.index')
                        ->with('success','FAQs created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\news  $job
     * @return \Illuminate\Http\Response
     */
    public function show(faq $faq)
    {
        //
        return view('admin/faqs.show',compact('faq'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\news  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(faq $faq)
    {
        //
        return view('admin/faqs.edit',compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\news  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, faq $faq)
    {
        //
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);
    
        $faq->update($request->all());
    
        return redirect()->route('faqs.index')
                        ->with('success','FAQs updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\news  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(faq $faq)
    {
        //
        
        $faq->delete();
    
        return redirect()->route('faqs.index')
                        ->with('success','FAQs deleted successfully');
    }
    public function faqsView(){
        $faqs = DB::table('faqs')->get(['question','answer']);
     
        return view('faq',compact('faqs'));

    }
}
