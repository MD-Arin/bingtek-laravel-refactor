<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Content;
use Illuminate\Support\Facades\Auth;
use Image;

class DashFrpsController extends Controller
{
    public function updateOfficePartitioning(Request $request){
        $contents = new Content;
        
        if(Auth::check()){
            
            
            
            return redirect('dash-frps');
        }
    }
    
    public function updateOfficeSmart(Request $request){
        $contents = new Content;
        
        if(Auth::check()){
            
            
            return redirect('dash-frps');
        }
    }
    
    public function  updateupdateOfficeComfort(Request $request){
        $contents = new Content;
        
        if(Auth::check()){
            
            return redirect('dash-frps');
        }
    }
    
    public function updateOfficeDesign(Request $request){
        $contents = new Content;
        
        if(Auth::check()){
            
            return redirect('dash-frps');
        }
    }
    
    public function updateOfficeLuxury(Request $request){
        $contents = new Content;
        
        if(Auth::check()){
            
            return redirect('dash-frps');
        }
    }
}
