<?php

namespace App\Http\Controllers\Layout;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function about()
    {
     return view('layout.pages.about');
    }
}
