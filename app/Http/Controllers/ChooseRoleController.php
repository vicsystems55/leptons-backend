<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class ChooseRoleController extends Controller
{
    //

    public function choose()
    {
        if (Auth::user()->role =='admin') {
            return redirect('/admin');
        }

        elseif (Auth::user()->role =='agent') {
            return redirect('/agent');
        }

        elseif (Auth::user()->role =='buyer') {
            return redirect('/buyer');
        }

        else{
            abort(403);
        }
    }

}
