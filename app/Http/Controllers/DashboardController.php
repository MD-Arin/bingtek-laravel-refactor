<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Content;

class DashboardController extends Controller
{
    public function updateHome(){
        if(Auth::check()){
            $content = new Content;
            $content->where([['section', '=', "1-img-company"]])->update(['body' => Input::get('company-name')]);
        }
    }
}
