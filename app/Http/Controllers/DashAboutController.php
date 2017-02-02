<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Content;
use Illuminate\Support\Facades\Auth;
use Image;

class DashAboutController extends Controller
{
    public function updateAboutHistory(Request $request)
    {
        if(Auth::check())
        {
            $content = new Content;
            
            
            return redirect('/dash-about');
        }
    }
}
