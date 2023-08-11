<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\URL;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\profile;
use App\Models\academic;
use App\Models\experience;
use App\Models\apply_job;
use Carbon\Carbon;
use Illuminate\Support\Str;



class applyController extends Controller
{
    //
    public function __construct()
    {
         $this->middleware(['auth','verified']);
    }
    public function index()
    {   
        
        $uid=Auth::id();
        $maxValue = DB::table('apply_jobs')->where('user_id','=',$uid)->max('id');
        $profile=DB::table('profiles')->where('applyjob_id','=',$maxValue)->get();
        $academics=DB::table('academics')->where('applyjob_id','=',$maxValue)->get();
        $experience=DB::table('experience')->where('applyjob_id','=',$maxValue)->get();
//dd($profile);
        // if($profile->isNotEmpty()){
        //     dd("array us empty");
        // }
        // else{
        //     dd("shahrab saleem");
        // }
       // dd("array come with data");
        $job=DB::table('jobs')->get();
        //dd($experience);
        return view('apply',compact('job','profile','academics','experience'));
    }
    public function jobform(Request $request)
    {
        // dd($request);
        // exit();
        $request->validate([
            
           
            'job' => 'required',
            'name' => 'required',
            'f_name' => 'required',
            'gender' => 'required',
            'cnic' => 'required',
            'religious' => 'required',
            'nationality' => 'required',
            'dob' => 'required',
            'place_of_birth' => 'required',
            'email' => ['required', 'email', 'max:255',  'unique:users,id'],
            'div_domicel' => 'required',
            'pro_domicle' => 'required',
            'dis_domicel' => 'required',
            'postal_city' => 'required',
            'postal_addr' => 'required',
            'per_address' => 'required',
            'phone' => 'required | numeric ',
            'disable' => 'required',
            'pic' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'idcard_front' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'idcard_back' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'pic_matric' => 'required',
            
            
            
            
            // | digits:10
            // // Academic Validation by Mubii
            // 'user_id' => 'required',
            // 'institute' => 'required',
            // 'degree' => 'required',
            // 'pass_year' => 'required',
            // 'total_pass' => 'required',
            // 'obt_mark' => 'required',
            // 'cgp' => 'required',
            // 'pic_matric' => 'required',
            // 'pic_fsc' => 'required',
            // 'pic_master' => 'required',
            // 'pic_phd' => 'required',

            // // Experience Validation by Mubii
            // 'user_id' => 'required',
            // 'designaation' => 'required',
            // 'orga_name' => 'required',
            // 'start_date' => 'required',
            // 'end_date' => 'required',
            // 'retired' => 'required',
            // 'dept_name' => 'required',
            // 'pic_discharge' => 'required',
            // 'experience' => 'required',
        ],
        [
            // 'job_id.required'    => 'Please! Select Desired Job.',
            'name.required'    => 'Please! Enter your First Name',
            'f_name.required'    => 'Please! Enter your Last Name',
            'gender.required'    => 'Please! Enter your Gender',
            'cnic.required'    => 'Please! Enter your CNIC Number',
            'religious.required'    => 'Please! Enter your Religion',
            'nationality.required'    => 'Please! Enter your Nationality',
            'dob.required'    => 'Please! Enter your Date of Birth',
            'place_of_birth.required'    => 'Please! Enter your Place of Birth',
            'email.required'    => 'Please! Enter your first name',
            'div_domicel.required'    => 'Please! Enter your DOD',
            'pro_domicle.required'    => 'Please! Enter your POD',
            'dis_domicel.required'    => 'Please! Enter your DOD',
            'postal_city.required'    => 'Please! Enter your Postal City',
            'postal_addr.required'    => 'Please! Enter your Postal Address',
            'per_address.required'    => 'Please! Enter your Per Address',
            'phone.required'    => 'Please! Enter your Phone Number',
            'disable.required'    => 'Please! Select Yes or No',
            'pic.required'    => 'Please! Upload Photograph',
            'idcard_front.required'    => 'Please! Upload CNIC (Front)',
            'idcard_back.required'    => 'Please! Upload CNIC (Back)',
            'pic_matric.required'    => 'Please! Upload Certificate',
        ]
    );
   
       
    $uid=Auth::id();  
    $name=$request->name;
    $job=$request->job;
    $f_name=$request->f_name;
    $gender=$request->gender;
    $cnic=$request->cnic;
    $religious=$request->religious;
    $nationality=$request->nationality;
    $dob=$request->dob;
    $place_of_birth=$request->place_of_birth;
    $email=$request->email;
    $div_domicel=$request->div_domicel;
    $pro_domicle=$request->pro_domicle;
    $dis_domicel=$request->dis_domicel;
    $postal_city=$request->postal_city;
    $postal_addr=$request->postal_addr;
    $per_address=$request->per_address;
    $phone=$request->phone;
    $phone_res=$request->phone_res;
    $phone_office=$request->phone_office;
    $emer_no=$request->emer_no;
    $emer_name=$request->emer_name;
    $emer_rel=$request->emer_rel;
    $disable=$request->disable;
    $pic=$request->pic;
    $idcard_front=$request->idcard_front;
    $idcard_back=$request->idcard_back;
    $institute=$request->institute;
    $degree=$request->degree;
    $pass_year=$request->pass_year;
    $total_pass=$request->total_pass;
    $obt_mark=$request->obt_mark;
    $cgp=$request->cgp;
    $pic_matric=$request->pic_matric;
    $pic_fsc=$request->pic_fsc;
    $pic_master=$request->pic_master;
    $pic_phd=$request->pic_phd;
    $designaation=$request->designaation;
    $orga_name=$request->orga_name;
    $start_date=$request->start_date;
    $end_date=$request->end_date;
    $retired=$request->retired;
    $dept_name=$request->dept_name;

    $vaccinated=$request->vaccinated;
    $certificate_no=$request->certificate_no;
    $pic_discharge=$request->pic_discharge;
    $challan_no=$this->challanNo();
        
   
        $profile=new profile;
        
        
        $apply_job=new apply_job;
        $apply_job->user_id=$uid;
        $apply_job->job_id=$job;
        $apply_job->challan_no=$challan_no;
        $currentDateTime = Carbon::now();
        $apply_job->apply_date=$currentDateTime;
        $apply_job->save();
        $apply_job_id=$apply_job->id;
       
       
    $profile->user_id=$uid;
    $profile->job_id=$job;
    $profile->name=$name;
    $profile->applyjob_id=$apply_job_id;
    
    $profile->f_name=$f_name;
    $profile->gender=$gender;
    $profile->cnic=$cnic;
    $profile->nationality=$nationality;
    $profile->dob=$dob;
    $profile->place_of_birth=$place_of_birth;
    $profile->religious=$religious;
    $profile->email=$email;
    $profile->div_domicel=$div_domicel;
    $profile->pro_domicle=$pro_domicle;
    $profile->dis_domicel=$dis_domicel;
    $profile->postal_city=$postal_city;
    $profile->postal_addr=$postal_addr;
    $profile->per_address=$per_address;
    $profile->phone=$phone;

    $profile->vaccinated=$vaccinated;
    $profile->certificate_no=$certificate_no;
    
    $profile->phone_res=$phone_res;
    $profile->phone_office=$phone_office;
    $profile->emer_no=$emer_no;
    $profile->emer_name=$emer_name;
    $profile->emer_rel=$emer_rel;
    $profile->disable=$disable;
    $profile->pic=$pic;
    $profile->idcard_front=$idcard_front;
    $profile->idcard_back=$idcard_back;

    if ($image = $request->file('pic')) {
        $destinationPath = '/public/image';
        $adsImage = time(). $image->getClientOriginalName();
       // $image->move($destinationPath,$adsImage);
         $image->storeAs($destinationPath, $adsImage);
        
        $profile->pic= $adsImage;
         $profile->pic=$profile->pic;
        //  $academic->pic_matric=$academic->pic_matric[$i];
    }
    if ($image = $request->file('idcard_front')) {
        $destinationPath = '/public/image';
        $adsImage = time(). $image->getClientOriginalName();
       // $image->move($destinationPath,$adsImage);
         $image->storeAs($destinationPath, $adsImage);
        
        $profile->idcard_front= $adsImage;
         $profile->idcard_front=$profile->idcard_front;
        //  $academic->pic_matric=$academic->pic_matric[$i];
    }
    if ($image = $request->file('idcard_back')) {
        $destinationPath = '/public/image';
        $adsImage = time(). $image->getClientOriginalName();
       // $image->move($destinationPath,$adsImage);
         $image->storeAs($destinationPath, $adsImage);
        
        $profile->idcard_back= $adsImage;
         $profile->idcard_back=$profile->idcard_back;
        //  $academic->pic_matric=$academic->pic_matric[$i];
    }
    

    $profile->save();
   



    
    for($i=0; $i<=count($obt_mark);$i++){
        $academic=new academic;
        if(empty($obt_mark[$i])){
            continue;
        }
        $academic->user_id=$uid;
        $academic->job_id=$job;
        $academic->applyjob_id=$apply_job_id;
        $academic->institute=$institute[$i];
        $academic->degree=$degree[$i];
        $academic->pass_year=$pass_year[$i];
        $academic->total_pass=$total_pass[$i];
        $academic->obt_mark=$obt_mark[$i];
        $academic->cgp=$cgp[$i];
        if ($image = $request->file('pic_matric')[$i]) {
            $destinationPath = '/public/image';
            $adsImage = time() . $i . $image->getClientOriginalName();
           // $image->move($destinationPath,$adsImage);
             $image->storeAs($destinationPath, $adsImage);
            
            $academic->pic_matric= $adsImage;
             $academic->pic_matric=$academic->pic_matric;
            //  $academic->pic_matric=$academic->pic_matric[$i];
        }


       
        $academic->save();
      

    }
    
    for($i=0; $i<=count($designaation);$i++){
        $experience=new experience;
        if(empty($designaation[$i])){
            continue;
        }
        

    $experience->user_id=$uid;
    $experience->job_id=$job;
    $experience->applyjob_id=$apply_job_id;
    $experience->designaation=$designaation[$i];
    $experience->orga_name=$orga_name[$i];
    $experience->start_date=$start_date[$i];
    $experience->end_date=$end_date[$i];
    $experience->retired=$retired;
    $experience->dept_name=$dept_name;
    $experience->pic_discharge=$pic_discharge;
    $experience->save();

    }
   

    
    //   return view(URL::to('/'));
    return redirect()->route('appliedjobs');
    }
    function challanupload(request $request){
        //dd($request->file('uploadchallan'));
        $applyid=$request->id;
        if ($image = $request->file('uploadchallan')) {
            $destinationPath = 'public/challan';
            $challanImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->storeAs($destinationPath, $challanImage);
            DB::update('update apply_jobs set uploadchallan = ? where id = ?',[$challanImage,$applyid]);
            return redirect()->route('home');
        }

    }
    //center Allocation
    Function centerAllocate(){
        $center=DB::table('centers')->get();
        $job= DB::table('apply_jobs')
            ->select('apply_jobs.id','apply_jobs.uploadchallan','departs.deprt_name','jobs.post_name','jobs.job_id','profiles.name','profiles.gender','profiles.cnic','profiles.email','profiles.phone')
            ->join('profiles', 'apply_jobs.id', '=', 'profiles.applyjob_id')
            ->join('jobs', 'apply_jobs.job_id', '=', 'jobs.id')
            ->join('departs', 'jobs.department', '=', 'departs.id')
             ->where('apply_jobs.verify', '=', '1')
             ->where('apply_jobs.center_id', '=', NULL) 
            //->where('profiles.user_id', '=', 'apply_jobs.user_id')
            ->orderBy('apply_jobs.id','ASC')->paginate(10); // not not change order by ASC
            //if order by ASC then use max in $maxValue query.
      
       return view('admin/centerallo',['job'=>$job],['center'=>$center]);


    }
    function centerallowed(request $request){
       // dd($request->centerallow);
       $roll_no = new apply_job;
        $cen_id=$request->center;

        foreach($request->centerallow as $applyjob){
            /* Fetch th Job Id */
            $apply_job=DB::table('apply_jobs')->where('id','=',$applyjob)->get('job_id');
           /* Fetch the Job Id Because Assign the Roll number  */
            // $job= DB::table('apply_jobs')
            // ->select('jobs.job_id')
            // ->join('jobs', 'apply_jobs.job_id', '=', 'jobs.id')->where('jobs.id','=',$apply_job[0]->job_id)->get();

            $job=DB::table('jobs')->where('id','=',$apply_job[0]->job_id)->get('job_id');

            /* latestest record finf according to the job orderBy('roll_no','DESC')->*/
            $maxValue = DB::table('apply_jobs')->where('job_id','=',$apply_job[0]->job_id)->where('verify','=','1')->where('roll_no','!=','')->max('id');
            echo "<br>****".$maxValue;

            $latestRollno=DB::table('apply_jobs')->where('id','=',$maxValue)->get('roll_no');
            if(!empty( $latestRollno[0]->roll_no)){
                echo "<br>====".$latestRollno[0]->roll_no;
                $rollno_arr = explode('-', $latestRollno[0]->roll_no);
                $rollno = $rollno_arr[1];
            }else{
                $rollno = 100000;
            }
            $roll_no = str_pad($rollno + 1, 6, "0", STR_PAD_LEFT);
           // echo "<br>---".$roll_no;
            // exit;
            /* Allocate Center */
           DB::update('update apply_jobs set center_id = ?, roll_no = ? where id = ?',[$cen_id,$roll_no,$applyjob]);
           //DB::update('update apply_jobs set roll_no = ? where id = ?',[$roll_no,$applyjob]);
          return  $this->centerAllocate();



        }

    }
    function challanNo()
    {   
     $new_voucher_no=1000;
        $vno=DB::table('voucher_no')->where('id','=',1)->get('voucher_no');
      
        if($vno[0]->voucher_no == 0){
            
           $new_voucher_no = $new_voucher_no + 1;
        }
        else{
        $new_voucher_no = $vno[0]->voucher_no + 1;
        }
    DB::update('update voucher_no set voucher_no = ? where id = ?',[$new_voucher_no,'1']);
    return $new_voucher_no;
    

        
    //     $vno = $this->single(VOUCHERNO . " where id=1", 'voucher_no');
    // $voucher_no = $vno->voucher_no;
    //     $new_voucher_no = $voucher_no+1;

    //     $sql = "update " . VOUCHERNO . " set voucher_no= '".$new_voucher_no."' where id = 1";
    //     mysqli_query($this->link, $sql);
    //     return $new_voucher_no;  

    }

}
