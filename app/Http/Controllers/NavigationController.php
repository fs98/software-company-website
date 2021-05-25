<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    //Public Home Page
    public function index() 
    {
      return view('pages.home');
    }
}
