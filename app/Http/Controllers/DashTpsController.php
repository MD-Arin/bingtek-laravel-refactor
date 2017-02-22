<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Content;
use Illuminate\Support\Facades\Auth;
use Image;

class DashTpsController extends Controller
{
    public function updateSoftDevIntro(Request $request){
        $content = new Content;
        
        if(Auth::check()){
            
            
            return redirect('dash-tps');
        }
    }
    
    public function updateSoftDev(Request $request){
        $content = new Content;
        
        if(Auth::check()){
            
            
            return redirect('dash-tps');
        }
    }
    
    public function updateSoftMen(Request $request){
        $content = new Content;
        
        if(Auth::check()){
            
            return redirect('dash-tps');
        }
    }
    
    public function updateSoftDiverse(Request $request){
        $content = new Content;
        
        if(Auth::check()){
            
            return redirect('dash-tps');
        }
    }
    
}
