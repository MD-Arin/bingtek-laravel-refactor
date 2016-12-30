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
      return null;
    }

    public function getDashFps(){
      return null;
    }

    public function getDashSps(){
      return null;
    }

    public function getDashTps(){
      return null;
    }

    public function getDashFrps(){
      return null;
    }

    public function getLogout(){
      Auth::logout();
    }
}
