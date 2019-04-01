<?php

namespace App\Http\Controllers\Layout;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommingSoonController extends Controller
{
    public function CommingSoon()
    {
     return view('layout.pages.comming-soon');
    }
}
