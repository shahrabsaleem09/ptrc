<?php

namespace App\Http\Controllers;

use App\Models\experience;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class jobviewController extends Controller
{
  //
  public function __construct()
    {
         $this->middleware('auth');
    }
  public function index()
  {
    $postjob = DB::table('jobs')->get(['post_name', 'id']);

    //     $job= DB::table('apply_jobs')
    //     ->select('apply_jobs.*','jobs.*','departs.*','profiles.id','profiles.name','profiles.cnic','profiles.email','profiles.gender','profiles.phone')
    //     ->join('profiles', 'apply_jobs.user_id', '=', 'profiles.user_id')
    //     ->join('jobs', 'apply_jobs.job_id', '=', 'jobs.id')
    //     ->join('departs', 'jobs.department', '=', 'departs.id')
    //     // ->where('apply_jobs.user_id', '=', $uid)
    //    ->where('profiles.job_id', '=', 'apply_jobs.job_id')
    //     ->orderBy('apply_jobs.id','DESC')->paginate(10);
    // dd($job);

    $job = DB::table('apply_jobs')
      ->select('apply_jobs.id', 'apply_jobs.uploadchallan', 'departs.deprt_name', 'jobs.post_name', 'jobs.job_id', 'profiles.name', 'profiles.gender', 'profiles.cnic', 'profiles.email', 'profiles.phone',)
      ->join('profiles', 'apply_jobs.id', '=', 'profiles.applyjob_id')
      ->join('jobs', 'apply_jobs.job_id', '=', 'jobs.id')
      ->join('departs', 'jobs.department', '=', 'departs.id')
      // ->where('apply_jobs.user_id', '=', $uid)
      //->where('profiles.user_id', '=', 'apply_jobs.user_id')
      ->orderBy('apply_jobs.id', 'DESC')->paginate(10);
    //dd($job);

    return view('admin/viewjobs', ['job' => $job], ['postjobs' => $postjob]);
  }
  public function show(request $request)
  {
    $job_id = $request->id;

    $profiledetail = DB::table('profiles')->where('profiles.applyjob_id', '=', $job_id)->get();
    $experdetail = DB::table('experience')->where('experience.applyjob_id', '=', $job_id)->get();
    $academdetail = DB::table('academics')->where('academics.applyjob_id', '=', $job_id)->get();
    $departname = DB::table('apply_jobs')
      ->select('departs.deprt_name', 'jobs.post_name',)->join('jobs', 'apply_jobs.job_id', '=', 'jobs.id')->join('departs', 'jobs.department', '=', 'departs.id')->where('apply_jobs.id', '=', $job_id)->get();
    // echo url()->current();
    // Route::getCurrentRoute()->getName();
    // $uri = $request->path();
    //$arr=preg_match_all('/(?=[a-z]+)(?<=[0-9])/i',$uri);
    // echo $uri;
    // if(preg_match('/^[0-9a-z]+$/i', $uri)){
    //   echo"heeeeeeeeeeee".$uri;

    // }
    //         preg_match_all("/[a-z]/[a-z]+|\d+/", $uri, $matches);
    // print_r($matches[0][0]);
    //         //echo"ohhhhhhhhh".$uri;
    //        // print_r($arr);
    //         if($matches[0][0]=='admin/viewjob'){
    //           echo"echoooooo";
    //           exit();
    //         }
    // dd($departname);

    //     $job= DB::table('apply_jobs')
    //     ->select('apply_jobs.*','jobs.*','departs.*','profiles.*','academics.*','experience.*')
    //     ->join('profiles', 'apply_jobs.user_id', '=', 'profiles.user_id')
    //     ->join('jobs', 'apply_jobs.j ob_id', '=', 'jobs.id')
    //     ->join('departs', 'jobs.department', '=', 'departs.id')
    //     ->join('academics', 'academics.job_id', '=', 'apply_jobs.job_id')
    //     ->join('experience', 'experience.job_id', '=', 'apply_jobs.job_id')
    //      ->where('apply_jobs.user_id', '=', '3')
    //     ->where('apply_jobs.id', '=',$job_id )
    //     ->orderBy('apply_jobs.id','DESC')->paginate(1);
    //  dd($profiledetail);


    // return view('admin/viewjob',['departname'=>$departname],['profiledetail'=>$profiledetail],['experdetail'=>$experdetail],['academdetail'=>$academdetail]);
    return view('admin/viewjob', compact('departname', 'profiledetail', 'experdetail', 'academdetail'));

    // ['departname'=>$departname],['profiledetail'=>$profiledetail],['experdetail'=>$experdetail],['academdetail'=>$academdetail]);
  }
  function appliedjobs()
  {
    $uid = Auth::id();
    $job = DB::table('apply_jobs')
      ->select('apply_jobs.id', 'apply_jobs.uploadchallan', 'apply_jobs.verify', 'apply_jobs.roll_no', 'jobs.resultpdf', 'departs.deprt_name', 'jobs.post_name', 'jobs.job_id', 'profiles.name', 'profiles.gender', 'profiles.cnic', 'profiles.email', 'profiles.phone',)
      ->join('profiles', 'apply_jobs.id', '=', 'profiles.applyjob_id')
      ->join('jobs', 'apply_jobs.job_id', '=', 'jobs.id')
      ->join('departs', 'jobs.department', '=', 'departs.id')
      ->where('apply_jobs.user_id', '=', $uid)
      //->where('profiles.user_id', '=', 'apply_jobs.user_id')
      ->orderBy('apply_jobs.id', 'DESC')->paginate(10);
    //dd($job);
    return view('viewjobsuser', ['job' => $job]);
  }
  function showuserjob(request $request)
  {
    $job_id = $request->id;

    $profiledetail = DB::table('profiles')->where('profiles.applyjob_id', '=', $job_id)->get();
    $experdetail = DB::table('experience')->where('experience.applyjob_id', '=', $job_id)->get();
    $academdetail = DB::table('academics')->where('academics.applyjob_id', '=', $job_id)->get();
    $departname = DB::table('apply_jobs')
      ->select('departs.deprt_name', 'jobs.post_name',)->join('jobs', 'apply_jobs.job_id', '=', 'jobs.id')->join('departs', 'jobs.department', '=', 'departs.id')->where('apply_jobs.id', '=', $job_id)->get();
    return view('viewjobuser', compact('departname', 'profiledetail', 'experdetail', 'academdetail'));
  }
  public function statusTask(request $request)
  {

    if ($request->action == 'get_user') {

      $id = $request->id;
      DB::update('update apply_jobs set verify = ? where id = ?', ['1', $id]);
    }
  }
  public function specificjob(request $request){
   // dd($request->user);
    $jobId=$request->user;
    $postjob = DB::table('jobs')->get(['post_name', 'id']);
    $job = DB::table('apply_jobs')
      ->select('apply_jobs.id', 'apply_jobs.uploadchallan', 'departs.deprt_name', 'jobs.post_name', 'jobs.job_id', 'profiles.name', 'profiles.gender', 'profiles.cnic', 'profiles.email', 'profiles.phone',)
      ->join('profiles', 'apply_jobs.id', '=', 'profiles.applyjob_id')
      ->join('jobs', 'apply_jobs.job_id', '=', 'jobs.id')
      ->join('departs', 'jobs.department', '=', 'departs.id')
       ->where('jobs.id', '=', $jobId)
      //->where('profiles.user_id', '=', 'apply_jobs.user_id')
      ->orderBy('apply_jobs.id', 'DESC')->paginate(10);
    //dd($job);

    return view('admin/viewjobs', ['job' => $job], ['postjobs' => $postjob]);

  }
}
