<?php

namespace App\Http\Controllers;

use App\Models\job;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class jobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $job= DB::table('jobs')
    ->select('departs.id','departs.deprt_name','jobs.sr_no','jobs.post_name','jobs.job_id','jobs.id',
    'jobs.department','jobs.job_fee','jobs.ad_date','jobs.close_date')
    ->join('departs', 'jobs.department', '=', 'departs.id')
    // ->where('countries.country_name', $country)
    ->orderBy('jobs.id','DESC')->paginate(5);

       // $job = job::latest()->paginate(5);
// dd($job);
        return view('admin/jobs.index',compact('job'));
            // ->with('i', (request()->input('page', 1) - 1) * 5);
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
        $data=DB::table('departs')->get();
        return view('admin/jobs.create',compact('data'));
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
            'sr_no' => 'required',
            'post_name' => 'required',
            'sr_no' => 'required',
            'job_id' => 'required',
            'department' => 'required',
            'ad_date' => 'required',
            'job_fee'=>'required',
            'close_date' => 'required',
        ]);
   // dd($request->department);
        job::create($request->all());
     
        return redirect()->route('jobs.index')
                        ->with('success','Job created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(job $job)
    {
        //
    //     $job1s= DB::table('jobs')
    // ->select('departs.id','departs.deprt_name','jobs.sr_no','jobs.post_name','jobs.job_id','jobs.id',
    // 'jobs.department','jobs.job_fee','jobs.ad_date','jobs.close_date')
    // ->join('departs', 'jobs.department', '=', 'departs.id')
    // ->where('jobs.id','=',$job);
    // print_r($job1s);
    // exit();
    // ->where('countries.country_name', $country)
    // echo($job);
    // exit();
    $depart= DB::table('departs')->where('id','=',$job->department)->get('deprt_name');
   
        return view('admin/jobs.show',compact('job','depart'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(job $job)
    {
        //
        $departall= DB::table('departs')->get();
        $depart= DB::table('departs')->where('id','=',$job->department)->get('deprt_name');
        return view('admin/jobs.edit',compact('job','depart','departall'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, job $job)
    {
        //
        $request->validate([
            'sr_no' => 'required',
            'post_name' => 'required',
            'sr_no' => 'required',
            'job_id' => 'required',
            'job_fee'=>'required',
            'department' => 'required',
            'ad_date' => 'required',
            'close_date' => 'required',
        ]);
    
        $job->update($request->all());
    
        return redirect()->route('jobs.index')
                        ->with('success','job updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(job $job)
    {
        //
        
        $job->delete();
    
        return redirect()->route('jobs.index')
                        ->with('success','job deleted successfully'); 
    }


   
}
