<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

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
      if(Auth::check()){
        return view('dashboard.home');
      }
    }
    public function getDashNav(){
      return null;
    }

    public function getDashFooter(){
      return null;
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
