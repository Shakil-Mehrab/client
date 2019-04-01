<?php

namespace App\Http\Controllers\Layouts;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategotyRequest;
use App\Model\Category;
use App\Model\Property;


class CategoriesController extends Controller
{
       
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::orderBy('created_at','desc')->get();
        return view('layouts.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategotyRequest $request)
    {
        Category::create($request->all());
        return redirect()->back()->withSuccess("Category Created !");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        $categories=Category::all();
        $news=Property::all();
        $category_news=Category::find($id)->products;
        return view("home",compact(['categories','news','category_news']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCategotyRequest $request, $id)
    {

    }
    public function postUpdateCategory(StoreCategotyRequest $request, $id)
    {
        $category=Category::find($id);
        $category->name=$request['name']; 
        if(Auth::check()){
        $category->update();
        return redirect()->back()->withSuccess("Category  Updated !");
    }

    return redirect()->back()->withError("You can't  update !");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getDeleteCategory($id)
    {
        if(Auth::check()){
        $category=Category::find($id);
        $category->delete();
        return redirect()->back()->withSuccess("Category  Deleted !");
        }
        return redirect()->back()->withError("You can't Delete !");
    }
}
