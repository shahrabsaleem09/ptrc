<?php

use Illuminate\Support\Facades\Route;  
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\jobController;
use App\Http\Controllers\testCenterController;
use App\Http\Controllers\DepartController;
use App\Http\Controllers\applyController;
use App\Http\Controllers\jobviewController;
use App\Http\Controllers\newsController;
use App\Http\Controllers\bankController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\resultController;
use App\Http\Controllers\faqController;
use App\Http\Controllers\SliderController;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::view('contact','contact')->name('contactus');
Route::view('aboutus','aboutus')->name('aboutus');
// Route::view('faq','faq')->name('faq');
Route::get('faqs', [faqController::class, 'faqsView'])->name('faqs');
Route::view('jobs','jobs')->name('jobs');
Route::get('downlodchallan{id}', [PDFController::class, 'generatePDF'])->name('generate-pdf'); 
Route::get('downlodrollnoslip{id}', [PDFController::class, 'generateRollNo'])->name('rollno-pdf');
Route::get('downlodResult/{id}', [PDFController::class, 'generateResult'])->name('result-pdf');
//Route::get('appliedjobs{id}', [jobviewController::class, 'showuserjob'])->name('generate-pdf');


Auth::routes(['verify' => true]); 
//Route::view('admin','admin/home')->name('home');

Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');


Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');


Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


Route::get('/profile', function () {
    // Only verified users may access this route...
})->middleware('verified');

// Admin Route Page
Route::group(['middleware'=>['protectedPage']],function(){
    Route::get('/admin/home', [adminController::class, 'index'])->name('adminhome');
    Route::post('result/{id}',[resultController::class, 'index'])->name('result');
    Route::get('result/{id}',[resultController::class, 'index'])->name('result');
    Route::resource('admin/jobs',jobController::class);
    Route::resource('admin/centers',testCenterController::class);
    Route::post('admin/specificjob',[jobviewController::class, 'specificjob'])->name('specificjob');
    Route::resource('admin/sliderimages', SliderController::class);
    Route::resource('admin/depart',DepartController::class);
    Route::resource('admin/news', newsController::class);
    Route::resource('admin/faqs', faqController::class);
    Route::resource('admin/bank', bankController::class);
    Route::get('admin/viewjob',[jobviewController::class, 'index'])->name('viewjob');
    Route::get('admin/viewjob{id}',[jobviewController::class, 'show'])->name('showjob');
    Route::post('admin/viewjob{id}',[jobviewController::class, 'show'])->name('showjob');
    Route::post('admin/centerAllocate',[applyController::class, 'centerallowed'])->name('centerAlloacte');
    Route::get('admin/centerallocation',[applyController::class, 'centerAllocate'])->name('centerallocation');
    //Route::get('changestatustask',[jobviewController::class, 'statusTask'])->name('changestatustask');

    Route::post('hbc45thu8ukik97yg6f545tc6y7u8',[jobviewController::class,'statusTask'])->name('hbc45thu8ukik97yg6f545tc6y7u8');

    //Route::post('changestatustask', array('as' => 'statusTask', 'uses' => 'jobviewController@statusTask'));
    


}); 

// user route page
Route::group(['middleware'=>['userpage']],function(){
    
    
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('apply', [applyController::class, 'index'])->name('apply');
    Route::post('apply', [applyController::class, 'jobform'])->name('apply');
    Route::post('challan-upload{id}', [applyController::class, 'challanUpload'])->name('challanupload');
    Route::get('appliedjobs', [jobviewController::class, 'appliedjobs'])->name('appliedjobs');
    Route::get('appliedjobs{id}', [jobviewController::class, 'showuserjob'])->name('showjobuser');
    Route::post('appliedjobs{id}', [jobviewController::class, 'showuserjob'])->name('showjobuser');
    Route::view('result','result')->name('result');
    Route::view('challan','challan')->name('challan');
    Route::view('rollno','rollno')->name('rollno');
    Route::view('exams','exams')->name('exams');




});
