<?php

namespace App\Http\Controllers\Layout;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCommentRequest;
use App\Model\Comment;

class BlogController extends Controller
{
    public function BlogGrid()
    {
     return view('layout.pages.blog.grid');
    }
    public function BlogList()
    {
     return view('layout.pages.blog.list');
    }
    public function BlogDetail()
    {
       $comments=Comment::orderBy('id','desc')->limit(5)->get();
       return view('layout.pages.blog.detail',compact('comments'));
    }
    public function CommentStore(StoreCommentRequest $request)
    {
        
       
         // $property=Property::where('id',$property_id)->first();
         $review=new Comment();        
         $review->message=$request['message'];
         $review->property_id=1;  
         $request->user()->comments()->save($review);
         // $property->user->notify(new RepliedToProperty($property)); 

        return redirect()->back()->withMessage("Comment Created !"); 
    }
}
