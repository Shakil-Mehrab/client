<?php

namespace App\Http\Controllers\Layout;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortFolioController extends Controller
{
    public function PortfolioGrid()
    {
     return view('layout.pages.portfolio.grid');
    }
     public function PortfolioList()
    {
     return view('layout.pages.portfolio.list');
    }
     public function PortfolioDetail()
    {
     return view('layout.pages.portfolio.detail');
    }
}
