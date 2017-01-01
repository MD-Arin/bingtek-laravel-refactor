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

    $content = new Content;

    //About History
    $aboutHistory1H1 = $content->where([['pages_id','=','2'],['section','=','2-1-1-h1']])->value('body');
    $aboutHistory1Img = $content->where([['pages_id','=','2'],['section','=','2-1-1-img']])->value('body');
    $aboutHistory2H1 = $content->where([['pages_id','=','2'],['section','=','2-1-2-h1']])->value('body');
    $aboutHistory2H2 = $content->where([['pages_id','=','2'],['section','=','2-1-2-h2']])->value('body');
    $aboutHistory2H3 = $content->where([['pages_id','=','2'],['section','=','2-1-2-h3']])->value('body');
    $aboutHistory2P = $content->where([['pages_id','=','2'],['section','=','2-1-2-p']])->value('body');
    //About Accomplishments
    $aboutAccomplishments1H1 = $content->where([['pages_id','=','2'],['section','=','2-2-1-h1']])->value('body');
    $aboutAccomplishments1Img1 = $content->where([['pages_id','=','2'],['section','=','2-2-1-img-1']])->value('body');
    $aboutAccomplishments1Img1H1 = $content->where([['pages_id','=','2'],['section','=','2-2-1-img-1-h1']])->value('body');
    $aboutAccomplishments1Img1H2 = $content->where([['pages_id','=','2'],['section','=','2-2-1-img-1-h2']])->value('body');
    $aboutAccomplishments1Img1H3 = $content->where([['pages_id','=','2'],['section','=','2-2-1-img-1-h3']])->value('body');
    $aboutAccomplishments1Img1P = $content->where([['pages_id','=','2'],['section','=','2-2-1-img-1-p']])->value('body');
    $aboutAccomplishments1Img2 = $content->where([['pages_id','=','2'],['section','=','2-2-1-img-2']])->value('body');
    $aboutAccomplishments1Img2H1 = $content->where([['pages_id','=','2'],['section','=','2-2-1-img-2-h1']])->value('body');
    $aboutAccomplishments1Img2H2 = $content->where([['pages_id','=','2'],['section','=','2-2-1-img-2-h2']])->value('body');
    $aboutAccomplishments1Img2H3 = $content->where([['pages_id','=','2'],['section','=','2-2-1-img-2-h3']])->value('body');
    $aboutAccomplishments1Img2P = $content->where([['pages_id','=','2'],['section','=','2-2-1-img-2-P']])->value('body');
    //About Testimonials
    $aboutTestimonials1Img = $content->where([['pages_id','=','2'],['section','=','2-3-1-img']])->value('body');
    $aboutTestimonials1P = $content->where([['pages_id','=','2'],['section','=','2-3-1-p']])->value('body');
    $aboutTestimonials1H51 = $content->where([['pages_id','=','2'],['section','=','2-3-1-h5-1']])->value('body');
    $aboutTestimonials1H52 = $content->where([['pages_id','=','2'],['section','=','2-3-1-h5-2']])->value('body');
    $aboutTestimonials1H53 = $content->where([['pages_id','=','2'],['section','=','2-3-1-h5-3']])->value('body');
    $aboutTestimonials2Img = $content->where([['pages_id','=','2'],['section','=','2-3-2-img']])->value('body');
    $aboutTestimonials2P = $content->where([['pages_id','=','2'],['section','=','2-3-2-p']])->value('body');
    $aboutTestimonials2H51 = $content->where([['pages_id','=','2'],['section','=','2-3-2-h5-1']])->value('body');
    $aboutTestimonials2H52 = $content->where([['pages_id','=','2'],['section','=','2-3-2-h5-2']])->value('body');
    $aboutTestimonials2H53 = $content->where([['pages_id','=','2'],['section','=','2-3-2-h5-3']])->value('body');
    $aboutTestimonials3Img = $content->where([['pages_id','=','2'],['section','=','2-3-3-img']])->value('body');
    $aboutTestimonials3P = $content->where([['pages_id','=','2'],['section','=','2-3-3-p']])->value('body');
    $aboutTestimonials3H51 = $content->where([['pages_id','=','2'],['section','=','2-3-3-h5-1']])->value('body');
    $aboutTestimonials3H52 = $content->where([['pages_id','=','2'],['section','=','2-3-3-h5-2']])->value('body');
    $aboutTestimonials3H53 = $content->where([['pages_id','=','2'],['section','=','2-3-3-h5-3']])->value('body');
    $aboutTestimonials4Img = $content->where([['pages_id','=','2'],['section','=','2-3-4-img']])->value('body');
    $aboutTestimonials4P = $content->where([['pages_id','=','2'],['section','=','2-3-4-p']])->value('body');
    $aboutTestimonials4H51 = $content->where([['pages_id','=','2'],['section','=','2-3-4-h5-1']])->value('body');
    $aboutTestimonials4H52 = $content->where([['pages_id','=','2'],['section','=','2-3-4-h5-2']])->value('body');
    $aboutTestimonials4H53 = $content->where([['pages_id','=','2'],['section','=','2-3-4-h5-3']])->value('body');
    //About Partners
    $aboutPartners1Img = $content->where([['pages_id','=','2'],['section','=','2-4-1-img']])->value('body');
    $aboutPartners1ImgH1 = $content->where([['pages_id','=','2'],['section','=','2-4-1-img-h1']])->value('body');
    $aboutPartners2Img = $content->where([['pages_id','=','2'],['section','=','2-4-2-img']])->value('body');
    $aboutPartners2ImgH1 = $content->where([['pages_id','=','2'],['section','=','2-4-2-img-h1']])->value('body');
    $aboutPartners3Img = $content->where([['pages_id','=','2'],['section','=','2-4-3-img']])->value('body');
    $aboutPartners3ImgH1 = $content->where([['pages_id','=','2'],['section','=','2-4-3-img-h1']])->value('body');
    $aboutPartners4Img = $content->where([['pages_id','=','2'],['section','=','2-4-4-img']])->value('body');
    $aboutPartners4ImgH1 = $content->where([['pages_id','=','2'],['section','=','2-4-4-img-h1']])->value('body');
    $aboutPartners5Img = $content->where([['pages_id','=','2'],['section','=','2-4-5-img']])->value('body');
    $aboutPartners5ImgH1 = $content->where([['pages_id','=','2'],['section','=','2-4-5-img-h1']])->value('body');
    $aboutPartners6Img = $content->where([['pages_id','=','2'],['section','=','2-4-6-img']])->value('body');
    $aboutPartners6ImgH1 = $content->where([['pages_id','=','2'],['section','=','2-4-6-img-h1']])->value('body');
    //About Team
    $aboutTeam1Img = $content->where([['pages_id','=','2'],['section','=','2-5-1-img']])->value('body');
    $aboutTeam1ImgH1 = $content->where([['pages_id','=','2'],['section','=','2-5-1-img-h1']])->value('body');
    $aboutTeam1ImgH2 = $content->where([['pages_id','=','2'],['section','=','2-5-1-img-h2']])->value('body');
    $aboutTeam2Img = $content->where([['pages_id','=','2'],['section','=','2-5-2-img']])->value('body');
    $aboutTeam2ImgH1 = $content->where([['pages_id','=','2'],['section','=','2-5-2-img-h1']])->value('body');
    $aboutTeam2ImgH2 = $content->where([['pages_id','=','2'],['section','=','2-5-2-img-h2']])->value('body');
    $aboutTeam3Img = $content->where([['pages_id','=','2'],['section','=','2-5-3-img']])->value('body');
    $aboutTeam3ImgH1 = $content->where([['pages_id','=','2'],['section','=','2-5-3-img-h1']])->value('body');
    $aboutTeam3ImgH2 = $content->where([['pages_id','=','2'],['section','=','2-5-3-img-h2']])->value('body');



    return view('main.about')->with([
      //About History
      'aboutHistory1H1' => $aboutHistory1H1,
      'aboutHistory1Img' => $aboutHistory1Img,
      'aboutHistory2H1' => $aboutHistory2H1,
      'aboutHistory2H2' => $aboutHistory2H2,
      'aboutHistory2H3' => $aboutHistory2H3,
      'aboutHistory2P' => $aboutHistory2P,

      //About Accomplishments
      'aboutAccomplishments1H1' => $aboutAccomplishments1H1,
      'aboutAccomplishments1Img1' => $aboutAccomplishments1Img1,
      'aboutAccomplishments1Img1H1' => $aboutAccomplishments1Img1H1,
      'aboutAccomplishments1Img1H2' => $aboutAccomplishments1Img1H2,
      'aboutAccomplishments1Img1H3' => $aboutAccomplishments1Img1H3,
      'aboutAccomplishments1Img1P' => $aboutAccomplishments1Img1P,
      'aboutAccomplishments1Img2' => $aboutAccomplishments1Img2,
      'aboutAccomplishments1Img2H1' => $aboutAccomplishments1Img2H1,
      'aboutAccomplishments1Img2H2' => $aboutAccomplishments1Img2H2,
      'aboutAccomplishments1Img2H3' => $aboutAccomplishments1Img2H3,
      'aboutAccomplishments1Img2P' => $aboutAccomplishments1Img2P,

      //About Testimonials
      'aboutTestimonials1Img' => $aboutTestimonials1Img,
      'aboutTestimonials1P'=> $aboutTestimonials1P,
      'aboutTestimonials1H51' => $aboutTestimonials1H51,
      'aboutTestimonials1H52' => $aboutTestimonials1H52,
      'aboutTestimonials1H53' => $aboutTestimonials1H53,
      'aboutTestimonials2Img' => $aboutTestimonials2Img,
      'aboutTestimonials2P'=> $aboutTestimonials2P,
      'aboutTestimonials2H51' => $aboutTestimonials2H51,
      'aboutTestimonials2H52' => $aboutTestimonials2H52,
      'aboutTestimonials2H53' => $aboutTestimonials2H53,
      'aboutTestimonials3Img' => $aboutTestimonials3Img,
      'aboutTestimonials3P'=> $aboutTestimonials3P,
      'aboutTestimonials3H51' => $aboutTestimonials3H51,
      'aboutTestimonials3H52' => $aboutTestimonials3H52,
      'aboutTestimonials3H53' => $aboutTestimonials3H53,
      'aboutTestimonials4Img' => $aboutTestimonials4Img,
      'aboutTestimonials4P'=> $aboutTestimonials4P,
      'aboutTestimonials4H51' => $aboutTestimonials4H51,
      'aboutTestimonials4H52' => $aboutTestimonials4H52,
      'aboutTestimonials4H53' => $aboutTestimonials4H53,

      //About Partners
      'aboutPartners1Img' => $aboutPartners1Img,
      'aboutPartners1ImgH1' => $aboutPartners1ImgH1,
      'aboutPartners2Img' => $aboutPartners2Img,
      'aboutPartners2ImgH1' => $aboutPartners2ImgH1,
      'aboutPartners3Img' => $aboutPartners3Img,
      'aboutPartners3ImgH1' => $aboutPartners3ImgH1,
      'aboutPartners4Img' => $aboutPartners4Img,
      'aboutPartners4ImgH1' => $aboutPartners4ImgH1,
      'aboutPartners5Img' => $aboutPartners5Img,
      'aboutPartners5ImgH1' => $aboutPartners5ImgH1,
      'aboutPartners6Img' => $aboutPartners6Img,
      'aboutPartners6ImgH1' => $aboutPartners6ImgH1,

      //About Team
      'aboutTeam1Img' => $aboutTeam1Img,
      'aboutTeam1ImgH1' => $aboutTeam1ImgH1,
      'aboutTeam1ImgH2' => $aboutTeam1ImgH2,
      'aboutTeam2Img' => $aboutTeam2Img,
      'aboutTeam2ImgH1' => $aboutTeam2ImgH1,
      'aboutTeam2ImgH2' => $aboutTeam2ImgH2,
      'aboutTeam3Img' => $aboutTeam3Img,
      'aboutTeam3ImgH1' => $aboutTeam3ImgH1,
      'aboutTeam3ImgH2' => $aboutTeam3ImgH2
    ]);
  }

  public function getFirst_ps(){
    $content = new Content;

    //FPS Connectivity
    $fpsConnectivity1Img = $content->where([['pages_id', '=', '3'],['section', '=', '3-1-1-img']])->value('body');
    $fpsConnectivity1ImgH1 = $content->where([['pages_id', '=', '3'],['section', '=', '3-1-1-img-h1']])->value('body');
    $fpsConnectivity1ImgH2 = $content->where([['pages_id', '=', '3'],['section', '=', '3-1-1-img-h2']])->value('body');
    $fpsConnectivity2Img = $content->where([['pages_id', '=', '3'],['section', '=', '3-1-2-img']])->value('body');
    $fpsConnectivity2ImgH1 = $content->where([['pages_id', '=', '3'],['section', '=', '3-1-2-img-h1']])->value('body');
    $fpsConnectivity2ImgH2 = $content->where([['pages_id', '=', '3'],['section', '=', '3-1-2-img-h2']])->value('body');
    $fpsConnectivity3Img = $content->where([['pages_id', '=', '3'],['section', '=', '3-1-3-img']])->value('body');
    $fpsConnectivity3ImgH1 = $content->where([['pages_id', '=', '3'],['section', '=', '3-1-3-img-h1']])->value('body');
    $fpsConnectivity3ImgH2 = $content->where([['pages_id', '=', '3'],['section', '=', '3-1-3-img-h2']])->value('body');
    // FPS Internet Connection
    $fpsInternetConnection1Img = $content->where([['pages_id', '=', '3'],['section', '=', '3-2-1-img']])->value('body');
    $fpsInternetConnection2H1 = $content->where([['pages_id', '=', '3'],['section', '=', '3-2-2-h1']])->value('body');
    $fpsInternetConnection2H2 = $content->where([['pages_id', '=', '3'],['section', '=', '3-2-2-h2']])->value('body');
    $fpsInternetConnection2P1 = $content->where([['pages_id', '=', '3'],['section', '=', '3-2-2-p-1']])->value('body');
    $fpsInternetConnection2P2 = $content->where([['pages_id', '=', '3'],['section', '=', '3-2-2-p-2']])->value('body');
    //FPS Fast Internet
    $fpsFastInternet1Img = $content->where([['pages_id', '=', '3'],['section', '=', '3-3-1-img']])->value('body');
    $fpsFastInternet1H1 = $content->where([['pages_id', '=', '3'],['section', '=', '3-3-1-h1']])->value('body');
    $fpsFastInternet1H2 = $content->where([['pages_id', '=', '3'],['section', '=', '3-3-1-h2']])->value('body');
    $fpsFastInternet1P = $content->where([['pages_id', '=', '3'],['section', '=', '3-3-1-p']])->value('body');
    $fpsFastInternet2li1 = $content->where([['pages_id', '=', '3'],['section', '=', '3-3-2-li-1']])->value('body');
    $fpsFastInternet2li2 = $content->where([['pages_id', '=', '3'],['section', '=', '3-3-2-li-2']])->value('body');
    $fpsFastInternet2li3 = $content->where([['pages_id', '=', '3'],['section', '=', '3-3-2-li-3']])->value('body');
    //FPS Multiple Users
    $fpsMultipleUsers1Img = $content->where([['pages_id', '=', '3'],['section', '=', '3-4-1-img']])->value('body');
    $fpsMultipleUsers1P = $content->where([['pages_id', '=', '3'],['section', '=', '3-4-1-p']])->value('body');
    $fpsMultipleUsers2Img = $content->where([['pages_id', '=', '3'],['section', '=', '3-4-2-img']])->value('body');
    $fpsMultipleUsers2P = $content->where([['pages_id', '=', '3'],['section', '=', '3-4-2-p']])->value('body');
    $fpsMultipleUsers3Img = $content->where([['pages_id', '=', '3'],['section', '=', '3-4-3-img']])->value('body');
    $fpsMultipleUsers3P = $content->where([['pages_id', '=', '3'],['section', '=', '3-4-3-p']])->value('body');

    return view('main.first_ps')->with([
      //FPS Connectivity
      'fpsConnectivity1Img' => $fpsConnectivity1Img,
      'fpsConnectivity1ImgH1' => $fpsConnectivity1ImgH1,
      'fpsConnectivity1ImgH2' => $fpsConnectivity1ImgH2,
      'fpsConnectivity2Img' => $fpsConnectivity2Img,
      'fpsConnectivity2ImgH1' => $fpsConnectivity2ImgH1,
      'fpsConnectivity2ImgH2' => $fpsConnectivity2ImgH2,
      'fpsConnectivity3Img' => $fpsConnectivity3Img,
      'fpsConnectivity3ImgH1' => $fpsConnectivity3ImgH1,
      'fpsConnectivity3ImgH2' => $fpsConnectivity3ImgH2,
      //FPS Internet COnnection
      'fpsInternetConnection1Img' => $fpsInternetConnection1Img,
      'fpsInternetConnection2H1' => $fpsInternetConnection2H1,
      'fpsInternetConnection2H2' => $fpsInternetConnection2H2,
      'fpsInternetConnection2P1' => $fpsInternetConnection2P1,
      'fpsInternetConnection2P2' => $fpsInternetConnection2P2,
      //FPS Fast Internet
      'fpsFastInternet1Img' => $fpsFastInternet1Img,
      'fpsFastInternet1H1' => $fpsFastInternet1H1,
      'fpsFastInternet1H2' => $fpsFastInternet1H2,
      'fpsFastInternet1P' => $fpsFastInternet1P,
      'fpsFastInternet2li1' => $fpsFastInternet2li1,
      'fpsFastInternet2li2' => $fpsFastInternet2li2,
      'fpsFastInternet2li3' => $fpsFastInternet2li3,
      //FPS Multiple Users
      'fpsMultipleUsers1Img' => $fpsMultipleUsers1Img,
      'fpsMultipleUsers1P' => $fpsMultipleUsers1P,
      'fpsMultipleUsers2Img' => $fpsMultipleUsers2Img,
      'fpsMultipleUsers2P' => $fpsMultipleUsers2P,
      'fpsMultipleUsers3Img' => $fpsMultipleUsers3Img,
      'fpsMultipleUsers3P' => $fpsMultipleUsers3P
    ]);
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
