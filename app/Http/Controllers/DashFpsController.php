<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Content;
use Illuminate\Support\Facades\Auth;
use Image;

class DashFpsController extends Controller
{
    public function updateFpsConnectivity(Request $request)
    {
        $content = new Content;
        
        if(Auth::check())
        {
            
        }
    }
}
