<?php

namespace App\Http\Controllers;
use App\Content;

/**
 * Pages Class for routing static web Pages
 */
class PagesController extends Controller
{
  public function getHome(){
    $content = new Content;

    //Home Cover
    $homeCompany = $content->where([['pages_id', '=', '1'],['section', '=', '1-img-company']])->value('body');
    $homeCover = $content->where([['pages_id', '=', '1'],['section', '=', '1-img-cover']])->value('body');
    $homeMotto = $content->where([['pages_id', '=', '1'],['section', '=', '1-img-motto']])->value('body');

    //Home Intro
    $homeCoIntro = $content->where([['pages_id', '=', '1'],['section', '=', '2-1-h1-intro']])->value('body');
    $homeCoIntroBody = $content->where([['pages_id', '=', '1'],['section', '=', '2-1-p-body']])->value('body');
    $homeCoIntrolink = $content->where([['pages_id', '=', '1'],['section', '=', '2-1-btn-link']])->value('body');
    $homeCoIntroli1 = $content->where([['pages_id', '=', '1'],['section', '=', '2-2-ul-li-1']])->value('body');
    $homeCoIntroli2 = $content->where([['pages_id', '=', '1'],['section', '=', '2-2-ul-li-2']])->value('body');
    $homeCoIntroli3 = $content->where([['pages_id', '=', '1'],['section', '=', '2-2-ul-li-3']])->value('body');
    $homeCoIntroli4 = $content->where([['pages_id', '=', '1'],['section', '=', '2-2-ul-li-4']])->value('body');

    //Home Internet
    $homeInternetH1 = $content->where([['pages_id', '=', '1'],['section', '=', '3-1-h1']])->value('body');
    $homeInternetImg = $content->where([['pages_id', '=', '1'],['section', '=', '3-1-img']])->value('body');
    $homeInternetP = $content->where([['pages_id', '=', '1'],['section', '=', '3-1-p']])->value('body');
    $homeInternetli1 = $content->where([['pages_id', '=', '1'],['section', '=', '3-1-li-1']])->value('body');
    $homeInternetli2 = $content->where([['pages_id', '=', '1'],['section', '=', '3-1-li-2']])->value('body');
    $homeInternetli3 = $content->where([['pages_id', '=', '1'],['section', '=', '3-1-li-3']])->value('body');
    $homeInternetli4 = $content->where([['pages_id', '=', '1'],['section', '=', '3-1-li-4']])->value('body');
    $homeInternetlink = $content->where([['pages_id', '=', '1'],['section', '=', '3-1-btn-link']])->value('body');
    //Home Networking
    $homeNetworkingH1 = $content->where([['pages_id', '=', '1'],['section', '=', '3-2-h1']])->value('body');
    $homeNetworkingli1 = $content->where([['pages_id', '=', '1'],['section', '=', '3-2-li-1']])->value('body');
    $homeNetworkingli2 = $content->where([['pages_id', '=', '1'],['section', '=', '3-2-li-2']])->value('body');
    $homeNetworkingli3 = $content->where([['pages_id', '=', '1'],['section', '=', '3-2-li-3']])->value('body');
    $homeNetworkingli4 = $content->where([['pages_id', '=', '1'],['section', '=', '3-2-li-4']])->value('body');
    $homeNetworkingImg = $content->where([['pages_id', '=', '1'],['section', '=', '3-2-img']])->value('body');
    $homeNetworkingP = $content->where([['pages_id', '=', '1'],['section', '=', '3-2-p']])->value('body');
    $homeNetworkinglink = $content->where([['pages_id', '=', '1'],['section', '=', '3-2-btn-link']])->value('body');

    //Home Software Development
    $homeSoftDevImg1 = $content->where([['pages_id', '=', '1'],['section', '=', '4-img-1']])->value('body');
    $homeSoftDevImg1H1 = $content->where([['pages_id', '=', '1'],['section', '=', '4-1-img1-h1']])->value('body');
    $homeSoftDevImg1li1 = $content->where([['pages_id', '=', '1'],['section', '=', '4-1-img1-li-1']])->value('body');
    $homeSoftDevImg1li2 = $content->where([['pages_id', '=', '1'],['section', '=', '4-1-img1-li-2']])->value('body');
    $homeSoftDevImg1li3 = $content->where([['pages_id', '=', '1'],['section', '=', '4-1-img1-li-3']])->value('body');
    $homeSoftDevImg1li4 = $content->where([['pages_id', '=', '1'],['section', '=', '4-1-img1-li-4']])->value('body');
    $homeSoftDevlink = $content->where([['pages_id', '=', '1'],['section', '=', '4-1-link']])->value('body');
    //Software Maintenance
    $homeSoftMaintenanceImg1 = $content->where([['pages_id', '=', '1'],['section', '=', '4-img-2']])->value('body');
    $homeSoftMaintenanceImg1H1 = $content->where([['pages_id', '=', '1'],['section', '=', '4-2-img2-h1']])->value('body');
    $homeSoftMaintenanceImg1li1 = $content->where([['pages_id', '=', '1'],['section', '=', '4-2-img2-li-1']])->value('body');
    $homeSoftMaintenanceImg1li2 = $content->where([['pages_id', '=', '1'],['section', '=', '4-2-img2-li-2']])->value('body');
    $homeSoftMaintenanceImg1li3 = $content->where([['pages_id', '=', '1'],['section', '=', '4-2-img2-li-3']])->value('body');
    $homeSoftMaintenanceImg1li4 = $content->where([['pages_id', '=', '1'],['section', '=', '4-2-img2-li-4']])->value('body');
    $homeSoftMaintenancelink = $content->where([['pages_id', '=', '1'],['section', '=', '4-2-link']])->value('body');

    //Home Office Furnishing
    $homeOffice1H1 = $content->where([['pages_id', '=', '1'],['section', '=', '5-1-h1']])->value('body');
    $homeOffice1H2 = $content->where([['pages_id', '=', '1'],['section', '=', '5-1-h2']])->value('body');
    $homeOffice1li1 = $content->where([['pages_id', '=', '1'],['section', '=', '5-1-li-1']])->value('body');
    $homeOffice1li2 = $content->where([['pages_id', '=', '1'],['section', '=', '5-1-li-2']])->value('body');
    $homeOffice1li3 = $content->where([['pages_id', '=', '1'],['section', '=', '5-1-li-3']])->value('body');
    $homeOffice1li4 = $content->where([['pages_id', '=', '1'],['section', '=', '5-1-li-4']])->value('body');
    $homeOffice2Img = $content->where([['pages_id', '=', '1'],['section', '=', '5-2-img']])->value('body');
    $homeOffice3H1 = $content->where([['pages_id', '=', '1'],['section', '=', '5-3-h1']])->value('body');
    $homeOffice3P = $content->where([['pages_id', '=', '1'],['section', '=', '5-3-p']])->value('body');
    $homeOffice3link = $content->where([['pages_id', '=', '1'],['section', '=', '5-3-link']])->value('body');


    return view('main.home')->with([
      //Home Cover
      'homeCover' => $homeCover,
      'homeCompany' => $homeCompany,
      'homeMotto' => $homeMotto,

      //Home Intro
      'homeCoIntro' => $homeCoIntro,
      'homeCoIntroBody' => $homeCoIntroBody,
      'homeCoIntrolink' => $homeCoIntrolink,
      'homeCoIntroli1' => $homeCoIntroli1,
      'homeCoIntroli2' => $homeCoIntroli2,
      'homeCoIntroli3' => $homeCoIntroli3,
      'homeCoIntroli4' => $homeCoIntroli4,

      //Home Internet
      'homeInternetH1' => $homeInternetH1,
      'homeInternetImg' => $homeInternetImg,
      'homeInternetP' => $homeInternetP,
      'homeInternetli1' => $homeInternetli1,
      'homeInternetli2' => $homeInternetli2,
      'homeInternetli3' => $homeInternetli3,
      'homeInternetli4' => $homeInternetli4,
      'homeInternetlink' => $homeInternetlink,

      //Home Networking
      'homeNetworkingH1' => $homeNetworkingH1,
      'homeNetworkingli1' => $homeNetworkingli1,
      'homeNetworkingli2' => $homeNetworkingli2,
      'homeNetworkingli3' => $homeNetworkingli3,
      'homeNetworkingli4' => $homeNetworkingli4,
      'homeNetworkingImg' => $homeNetworkingImg,
      'homeNetworkingP' => $homeNetworkingP,
      'homeNetworkinglink' => $homeNetworkinglink,

      //Home Software Development
      'homeSoftDevImg1' => $homeSoftDevImg1,
      'homeSoftDevImg1H1' => $homeSoftDevImg1H1,
      'homeSoftDevImg1li1' => $homeSoftDevImg1li1,
      'homeSoftDevImg1li2' => $homeSoftDevImg1li2,
      'homeSoftDevImg1li3' => $homeSoftDevImg1li3,
      'homeSoftDevImg1li4' => $homeSoftDevImg1li4,
      'homeSoftDevlink' => $homeSoftDevlink,
      //Home Software Maintenance
      'homeSoftMaintenanceImg1' => $homeSoftMaintenanceImg1,
      'homeSoftMaintenanceImg1H1' => $homeSoftMaintenanceImg1H1,
      'homeSoftMaintenanceImg1li1' => $homeSoftMaintenanceImg1li1,
      'homeSoftMaintenanceImg1li2' => $homeSoftMaintenanceImg1li2,
      'homeSoftMaintenanceImg1li3' => $homeSoftMaintenanceImg1li3,
      'homeSoftMaintenanceImg1li4' => $homeSoftMaintenanceImg1li4,
      'homeSoftMaintenancelink' => $homeSoftMaintenancelink,

      //Offices
      'homeOffice1H1' => $homeOffice1H1,
      'homeOffice1H2' => $homeOffice1H2,
      'homeOffice1li1' => $homeOffice1li1,
      'homeOffice1li2' => $homeOffice1li2,
      'homeOffice1li3' => $homeOffice1li3,
      'homeOffice1li4' => $homeOffice1li4,
      'homeOffice2Img' => $homeOffice2Img,
      'homeOffice3H1' => $homeOffice3H1,
      'homeOffice3P' => $homeOffice3P,
      'homeOffice3link' => $homeOffice3link
    ]);
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
}
