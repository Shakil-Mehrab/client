<?php

namespace App\Http\Controllers\Layouts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PropertyStoreRequest;
use App\Model\Property;
use App\Model\Category;


class PropertyController extends Controller
{
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties=Property::all();
        return view("layouts.properties.index",compact('properties'));
    }
    public function create()
    {
        $categories=Category::all();
        return view('layouts.properties.create-edit.create',compact('categories'));
    }
    public function store(PropertyStoreRequest $request)
    {
       
            $submit_properties=new Property();
            $submit_properties->title=$request['title'];
            $submit_properties->category_id=$request['category_id'];
            $submit_properties->address=$request['address'];
            $submit_properties->price=$request['price'];
            $submit_properties->detail=$request['detail'];
            // if($checkbox_array){
            // $checkbox_stirng=implode($checkbox_array);
            // $submit_properties->checkbox=$checkbox_stirng;
            // }
            $submit_properties->name=$request['name'];
            $submit_properties->email=$request['email']; 
            $submit_properties->phone=$request['phone'];          
            $image=$request->file("image"); 
            if($image){
            $image_full_name=$image->getClientOriginalName();
             $upload_path="images/";
             $image_url=$upload_path.$image_full_name;
             $success=$image->move($upload_path,$image_full_name);
            if($success){
              $submit_properties->image=$image_url;
              $request->user()->properties()->save($submit_properties);
            }
         }
        $request->user()->properties()->save($submit_properties);
        //  foreach($subscribers as $subscriber){
        //     Notification::route('mail', $subscriber->email)->notify(new  NewPostNotify($submit_properties));
        // }
        return redirect()->back()->withSuccess('Property submitted  succesfully');
    }


   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $property=Property::find($id);
        // $categories=Category::all();
        return view('layouts.properties.create-edit.edit',compact('property'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updates(PropertyStoreRequest $request,$product_id)
    {
        
        $submit_properties=new Property();
            $submit_properties->title=$request['title'];
            $submit_properties->property_type=$request['property_type'];
            $submit_properties->country=$request['country'];
            $submit_properties->status=$request['status'];
            $submit_properties->area=$request['area'];
            $submit_properties->nong_of_kitchen=$request['nong_of_kitchen'];
            $submit_properties->nong_of_bedroom=$request['nong_of_bedroom'];
            $submit_properties->nong_of_bathroom=$request['nong_of_bathroom'];
            $submit_properties->address=$request['address'];
            $submit_properties->state=$request['state'];
            $submit_properties->nong_of_gourage=$request['nong_of_gourage'];
            $submit_properties->price=$request['price'];
            $submit_properties->location=$request['location'];
            $submit_properties->detail=$request['detail'];
            $checkbox_array=$request['checkbox'];
            if($checkbox_array){
            $checkbox_stirng=implode($checkbox_array);
            $submit_properties->checkbox=$checkbox_stirng;
            }
            $submit_properties->name=$request['name'];
            $submit_properties->email=$request['email']; 
            $submit_properties->phone=$request['phone'];          
            $image=$request->file("image"); 
            if($image){
            $image_full_name=$image->getClientOriginalName();
             $upload_path="images/";
             $image_url=$upload_path.$image_full_name;
             $success=$image->move($upload_path,$image_full_name);
            if($success){
              $submit_properties->image=$image_url;
              $request->user()->properties()->save($submit_properties);
            }
         }
        $request->user()->properties()->save($submit_properties);
        //  foreach($subscribers as $subscriber){
        //     Notification::route('mail', $subscriber->email)->notify(new  NewPostNotify($submit_properties));
        // }
        return redirect()->back()->withSuccess('Property Updated  succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getDestroy($product_id)
    {
        $product=Property::where('id',$product_id)->first();
        $product->delete();
        return redirect()->back()->withSuccess('Product Updated!');
    }
}
