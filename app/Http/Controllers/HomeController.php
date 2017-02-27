<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Content;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $content = new Content;
      if(Auth::check()){

        $homeCover = $content->where([['pages_id', '=', '1'],['section', '=', '1-img-cover']])->value('body');
        return view('dashboard.home')->with(['homeCover' => $homeCover]);
      }
    }
    public function getDashNav(){
      return view('dashboard.navbar');
    }

    public function getDashFooter(){
      return view('dashboard.footer');
    }

    public function getDashboard(){
      return view('dashboard.home');
    }

    public function getDashAbout(){
      return view('dashboard.dash-about');
    }

    public function getDashFps(){
      return view('dashboard.dash-fps');
    }

    public function getDashSps(){
      return view('dashboard.dash-sps');
    }

    public function getDashTps(){
      return view('dashboard.dash-tps');
    }

    public function getDashFrps(){
      return view('dashboard.dash-frps');
    }

    public function getLogout(){
      Auth::logout();
      return redirect('/');
    }
}
