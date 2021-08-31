<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Models\Image;

use App\Models\Listing;

use App\Models\Notification;

// use App\Models\Review;

use App\Models\User;

use App\Models\UserProfile;

class AdminPageController extends Controller
{
    //

    public function index()
    {
        # code...

        return view('admin_dashboard.index');


    }

    public function listings()
    {
        # code...

        return view('admin_dashboard.listings');

        
    }

    public function listing($listing_code)
    {
        # code...

        return view('admin_dashboard.listing');

        
    }

    public function active_listings()
    {
        # code...

        return view('admin_dashboard.active_listings');

        
    }

    public function agents()
    {
        # code...

        return view('admin_dashboard.agents');

        
    }

    public function agent()
    {
        # code...

        return view('admin_dashboard.agent');

        
    }

    public function notifications()
    {
        # code...

        return view('admin_dashboard.notifications');

        
    }

    public function pending_listings()
    {
        # code...

        return view('admin_dashboard.pending_listings');

        
    }

    public function reserved_listings()
    {
        # code...

        return view('admin_dashboard.reserved_listings');

        
    }

    public function resolved_listings()
    {
        # code...

        return view('admin_dashboard.resolved_listings');

        
    }


    


}













