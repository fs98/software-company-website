<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    //Public Home Page
    public function index() 
    {
      return view('pages.index');
    }

    //Public About Us Page
    public function about() 
    {
      return view('pages.aboutus');
    } 
    
    //Public About Us Page
    public function portfolio() 
    {
      return view('pages.portfolio');
    } 

    //Privacy Policy
    public function privacyPolicy() 
    {
      return view('pages.privacy-policy');
    } 
}
