<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class resultController extends Controller
{
    function index(Request $request){
        $applyid=$request->id;
       
        if ($image = $request->file('image')) {
            
            $destinationPath = '/public/result';
            $resultImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->storeAs($destinationPath, $resultImage);
            DB::update('update jobs set resultpdf = ? where id = ?',[$resultImage,$applyid]);
            return redirect()->route('home');
        }
    }
}
