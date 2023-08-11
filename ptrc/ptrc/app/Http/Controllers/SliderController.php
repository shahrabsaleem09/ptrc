<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use App\Models\Slider_image;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $Slider_image = Slider_image::latest()->paginate(5);
    
        return view('admin/sliderimages.index',compact('Slider_image'))
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
        return view('admin/sliderimages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if($request->hasFile('image')) {
        //     $image       = $request->file('image');
        //     $file_extension = $request->image->getClientOriginalExtension();
        //     $filename = Str::random(50).'.'. $file_extension;
        //     $image_resize = Image::make($image->getRealPath());              
        //     $image_resize->resize(256, 256);
        //     $image_resize->save(public_path('attachments/' .'thumb_'.$filename));
        //     $data['thumb_image'] = $filename;
        //     \Storage::disk('attachments')->put($filename, \File::get($request->image));
        //     $data['image'] = $filename;
        // }



        $data=$request->all();
        //dd($request->file('image_name'));
        if($request->file('image_name')!='') {


            $file = $_FILES['image_name']['tmp_name']; 
            $sourceProperties = getimagesize($file);
            $fileNewName = time();
           // $pth=asset('../storage/slider/');
            $folderPath = Storage::path('public/slider/');
            
           // $folderPath = asset("../storage/slider/");
            //$folderPath = $_SERVER['DOCUMENT_ROOT'].'/storage/slider/';
            $ext = pathinfo($_FILES['image_name']['name'], PATHINFO_EXTENSION);
            $imageType = $sourceProperties[2];
    
    
            switch ($imageType) {
    
    
                case IMAGETYPE_PNG:
                    $imageResourceId = imagecreatefrompng($file); 
                    $targetLayer = $this->imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
                    imagepng($targetLayer,$folderPath. $fileNewName. "_thump.". $ext);
                    break;
    
    
                case IMAGETYPE_GIF:
                    $imageResourceId = imagecreatefromgif($file); 
                    $targetLayer = $this->imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
                    imagegif($targetLayer,$folderPath. $fileNewName. "_thump.". $ext);
                    break;
    
    
                case IMAGETYPE_JPEG:
                    $imageResourceId = imagecreatefromjpeg($file); 
                    $targetLayer = $this->imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
                    imagejpeg($targetLayer,$folderPath. $fileNewName. "_thump.". $ext);
                    break;
    
    
                default:
                    echo "Invalid Image type.";
                    exit;
                    break;
            }
    
    
            move_uploaded_file($file, $folderPath. $fileNewName. ".". $ext);
            $data['image_name'] = "$fileNewName". "_thump.".$ext;
        
        Slider_image::create($data);
        return redirect()->route('sliderimages.index')
        ->with('success','Images created successfully.');
        }
    
    
    
    
    

    




        exit;
        $this->validate($request,[
            'image_name'        =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048|dimensions:width=645,height=316'
        ]);
        // $request->validate([
        //     'image_name	' => 'required',
            
        // ]);
        $data=$request->all();
        if ($image = $request->file('image_name')) {
            $destinationPath = '/public/slider';
            $adsImage = time(). $image->getClientOriginalName();

            $image->storeAs($destinationPath, $adsImage);
            $data['image_name'] = "$adsImage";
        }
        Slider_image::create($data);
        // $filename = $_SERVER['DOCUMENT_ROOT'].'/storage/slider/'.$newname;
    
        //Slider_image::create($request->all());
     
        return redirect()->route('sliderimages.index')
                        ->with('success','Images created successfully.');
    }
    public function imageResize($imageResourceId,$width,$height) {
    
    
        $targetWidth =546;
        $targetHeight =316;
    
    
        $targetLayer=imagecreatetruecolor($targetWidth,$targetHeight);
        imagecopyresampled($targetLayer,$imageResourceId,0,0,0,0,$targetWidth,$targetHeight, $width,$height);
    
    
        return $targetLayer;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\news  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Slider_image $Sliderimage)
    {
        //
        return view('admin/sliderimages.show',compact('Slider_image'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider_image  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider_image $Sliderimage)
    {
        //
        return view('admin/sliderimages.edit',compact('Slider_image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\news  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider_image $Sliderimage)
    {
        //
        $request->validate([
            'image_name' => 'required',
            
        ]);
    
        $Sliderimage->update($request->all());
    
        return redirect()->route('sliderimages.index')
                        ->with('success','images updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider_image  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider_image $Sliderimage)
    {
        //
        //print($Sliderimage);
        $Sliderimage->delete();
    
        return redirect()->route('sliderimages.index')
                        ->with('success','image deleted successfully');
    }
    
}
