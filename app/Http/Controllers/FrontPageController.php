<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    //

    public function index()
    {
        
        
        return view('website.home');
    }

    public function about()
    {
        
        
        return view('website.about');
    }

    public function contact()
    {
        
        
        return view('website.contact');
    }

    public function listings()
    {
        
        
        return view('website.listings');
    }

    public function listing()
    {
        
        
        return view('website.listing');
    }
}
