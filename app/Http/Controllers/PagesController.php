<?php

namespace App\Http\Controllers;

/**
 * Pages Class for routing static web Pages
 */
class PagesController extends Controller
{
  public function getHome(){
    return view('main.home');
  }

  public function getAbout(){
    return view('main.about');
  }

  public function getFirst_ps(){
    return view('main.first_ps');
  }

  public function getSecond_ps(){
    return view('main.second_ps');
  }

  public function getThird_ps(){
    return view('main.third_ps');
  }

  public function getFourth_ps(){
    return view('main.fourth_ps');
  }

  public function getContacts(){
    return view('main.contacts');
  }

  public function getLogin(){
    return view('main.login');
  }
}
