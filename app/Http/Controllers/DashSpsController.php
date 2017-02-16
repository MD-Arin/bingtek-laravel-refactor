<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Content;
use Illuminate\Support\Facades\Auth;
use Image;

class DashSpsController extends Controller
{
    public function updateSpsIntro(Request $request)
    {
        $content = new Content;
        
        if(Auth::check())
        {
            
            return redirect('dash-sps');
        }
    }
    
    public function updateSpsSec2(Request $request)
    {
        $content = new Content;
        
        if(Auth::check())
        {
            
            return redirect('dash-sps');
        }
    }
    
    public function updateSpsTouchline(Request $request)
    {
        $content = new Content;
        
        if(Auth::check())
        {
            
            return redirect('dash-sps');
        }
    }
    
    public function updateSpsSec3(Request $request)
    {
        $content = new Content;
        
        if(Auth::check())
        {
            
            return redirect('dash-sps');
        }
    }
    
    public function updateSpsSec4(Request $request)
    {
        $content = new Content;
        
        if(Auth::check())
        {
            
            return redirect('dash-sps');
        }
    }
}
