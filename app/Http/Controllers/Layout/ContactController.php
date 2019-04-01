<?php

namespace App\Http\Controllers\Layout;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function Contact()
    {
     return view('layout.pages.contact');
    }
}
