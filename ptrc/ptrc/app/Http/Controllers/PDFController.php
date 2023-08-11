<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade;
use App\Http\Controllers\URL;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
//use Symfony\Component\HttpFoundation\Response;
//use Response;

class PDFController extends Controller
{
    //
    public function generatePDF(request $request)
    {
        $applied_id=$request->id;
        
        $job= DB::table('apply_jobs')
  ->select('apply_jobs.id','jobs.post_name','apply_jobs.challan_no','jobs.job_id','jobs.close_date','jobs.job_fee','profiles.name','profiles.name','profiles.f_name')
  ->join('profiles', 'apply_jobs.id', '=', 'profiles.applyjob_id')
  ->join('jobs', 'apply_jobs.job_id', '=', 'jobs.id')
  ->where('apply_jobs.id', '=', $applied_id)->get();
  $banks=DB::table('banks')->get();
  //dd($banks);
 //->where('profiles.user_id', '=', 'apply_jobs.user_id')
 
 //dd($job);
        $path = 'assets/img/logo/logo.png';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $logo = 'data:image/' . $type . ';base64,' . base64_encode($data);
        
        $path1 = 'assets/img/logo/challan.png';
        $type1 = pathinfo($path1, PATHINFO_EXTENSION);
        $data1 = file_get_contents($path1);
        $logochallan = 'data:image/' . $type1 . ';base64,' . base64_encode($data1);
        $data = [
            'logo'=>$logo,
            'bank'=>$banks,
            'job'=>$job,
            'logochallan'=>$logochallan
        ];
    
         
        $pdf = PDF::loadView('challanPDf', $data)->setOptions(['defaultFont' => 'sans-serif'])->setPaper('a4', 'landscape');

    
         return $pdf->download('challan.pdf');
        // return view('challanPDf',$data);
    }
    public function generateRollNo(request $request)
    {
        $applied_id=$request->id;
       // dd($applied_id);
        $job= DB::table('apply_jobs')
  ->select('apply_jobs.id','centers.name as c_name','centers.address','centers.date_time','centers.start_time','centers.end_time','apply_jobs.roll_no','jobs.post_name','profiles.div_domicel','profiles.pic','profiles.name','profiles.dob')
  ->join('profiles', 'apply_jobs.id', '=', 'profiles.applyjob_id')
  ->join('jobs', 'apply_jobs.job_id', '=', 'jobs.id')
  ->join('centers', 'apply_jobs.center_id', '=', 'centers.id')
  ->where('apply_jobs.id', '=', $applied_id)->get();
  //$banks=DB::table('banks')->get();
  //dd($banks);
 //->where('profiles.user_id', '=', 'apply_jobs.user_id')
 
 //dd($job);
        $path = 'assets/img/logo/logo.png';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $logo = 'data:image/' . $type . ';base64,' . base64_encode($data);
       
        $path1 = 'storage/image/'.$job[0]->pic;
        $type1 = pathinfo($path1, PATHINFO_EXTENSION);
        $data1 = file_get_contents($path1);
        $logouser = 'data:image/' . $type1 . ';base64,' . base64_encode($data1);
        //dd($logouser);
        
        $path2 = 'assets/img/logo/rollno.png';
        $type2 = pathinfo($path2, PATHINFO_EXTENSION);
        $data2 = file_get_contents($path2);
        $logochallan = 'data:image/' . $type2 . ';base64,' . base64_encode($data2);
       // dd($logochallan);
      
        $data = [
            'logo'=>$logo,
            'job'=>$job,
            'logouser'=>$logouser,
            'logochallan'=>$logochallan
        ];
         
        $pdf = PDF::loadView('roll_noPDF', $data)->setOptions(['defaultFont' => 'sans-serif']);

    
         return $pdf->download('roll_no.pdf');
        // return view('roll_noPDF',$data);
        // return view('contact');
    }
    function generateResult(request $request){
         $id=$request->id;
        
         $result=DB::table('jobs')->where('job_id','=',$id)->get('resultpdf');
        // dd($result[0]->resultpdf);
        $path = 'storage/result/'.$result[0]->resultpdf;
        return Response::download($path); 


    }
}
