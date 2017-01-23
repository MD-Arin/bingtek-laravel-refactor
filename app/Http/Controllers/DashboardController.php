<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Content;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function updateHome(){
        if(Auth::check()){
            $content = new Content;
            $content->where([['section', '=', "1-img-company"]])->update(['body' => Input::get('company-name')]);
            $content->where([['section', '=', "1-img-motto"]])->update(['body' => Input::get('company-slogan')]);
            //$content->where([['section', '=', "1-img-cover"]])->update(['body' => Input::get('cover-image')]);
            return redirect('/dashboard');
        }
    }
}
