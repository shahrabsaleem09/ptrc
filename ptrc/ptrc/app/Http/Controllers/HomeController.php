<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       //  $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       
        $data=DB::table('departs')->get(['deprt_name']);
        $job=DB::table('jobs')->get(); 
        $city=DB::table('tbl_city')->get();
        $news=DB::table('news')->get(['name','detail']);
        $images=DB::table('slider_images')->get('image_name');
        
       
        //return view('home',['city'=>$city],['data'=>$data],['job'=>$jobs]);
        return view('home',compact('data','job','city','news','images'));
    }
    public function adminHome()
    {
        return view('adminHome');
    }
    public function faqsView(){
        $faqs = DB::table('faqs')->get(['question','answer']);
     
        return view('faq',compact('faqs'));

    }
}
