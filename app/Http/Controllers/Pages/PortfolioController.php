<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('pages.portfolio.index');
    }

    public function show()
    {
        return view('pages.portfolio.single');
    }
}
