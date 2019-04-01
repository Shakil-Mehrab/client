<?php

namespace App\Http\Controllers\Layout;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Model\Media;

class BuildYourselfController extends Controller
{
   public function Introduction()
    {
     return view('layout.pages.build-yourself.introduction');
    }
    public function SelectDesign()
    {
     $designs=Media::OrderBy('id','desc')->limit(16)->get();
     return view('layout.pages.build-yourself.select-design',compact('designs'));
    }
    public function VirtualConstruction()
    {
    return view('layout.pages.build-yourself.virtual-construction');
    }
    public function DesignUpload(Request $request)
    {
     $images=$request->file("image"); 
     if(count($images)>0){
        foreach($images as $image){
         $image_full_name=$image->getClientOriginalName();
         $upload_path="images/me/";
         $image_url=$upload_path.$image_full_name;
         $success=$image->move($upload_path,$image_full_name);
        if($success){
          $storage=new Media();
          $storage->image=$image_url;
          $request->user()->media()->save($storage);
         }
       }
     }
    return redirect()->back()->withSuccess('Images Uploaded succesfully');

   }   
}
