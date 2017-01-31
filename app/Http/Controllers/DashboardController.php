<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Content;
use Illuminate\Support\Facades\Auth;
use Image;

class DashboardController extends Controller
{
    public function updateHomeCover(Request $request){

      // Home Cover image
        if(Auth::check()){
            $content = new Content;
            if (Input::get('company-name') != null) {
              $content->where([['pages_id', '=', '1'],['section', '=', "1-img-company"]])->update(['body' => Input::get('company-name')]);

              if(Input::get('company-slogan') != null){
                $content->where([['pages_id', '=', '1'],['section', '=', "1-img-motto"]])->update(['body' => Input::get('company-slogan')]);

                if($request->hasFile('cover-image')){
                  $img = $request->file('cover-image');
                  $filename = time() . '.' . $img->getClientOriginalExtension();
                  $location = public_path('img/production/' . $filename);
                  $dataLocation = 'img/production/' . $filename;
                  Image::make($img)->save($location);

                  $content->where([['pages_id', '=', '1'],['section', '=', "1-img-cover"]])->update(['body' => $dataLocation]);
                }
              }
            }
            elseif (Input::get('company-slogan') != null) {
              $content->where([['pages_id', '=', '1'],['section', '=', '1-img-motto']])->update(['body' => Input::get('company-slogan')]);

              if($request->hasFile('cover-image')){
                $img = $request->file('cover-image');
                $filename = time() . '.' . $img->getClientOriginalExtension();
                $location = public_path('img/production/' . $filename);
                $dataLocation = 'img/production/' . $filename;
                Image::make($img)->save($location);

                $content->where([['pages_id', '=', '1'],['section', '=', '1-img-cover']])->update(['body' => $dataLocation]);
              }
            }
            elseif ($request->hasFile('cover-image')) {
              $img = $request->file('cover-image');
              $filename = time() . '.' . $img->getClientOriginalExtension();
              $location = public_path('img/production/' . $filename);
              $dataLocation = 'img/production/' . $filename;
              Image::make($img)->save($location);

              $content->where([['pages_id', '=', '1'],['section', '=', '1-img-cover']])->update(['body' => $dataLocation]);
            }

            return redirect('/dashboard');
        }
    }

    //Home Intro
    public function updateHomeCoIntro(Request $request)
    {
      $content = new Content;
      if(Auth::check())
      {

        if(Input::get('Company-Intro') != null){
          $content->where([['pages_id', '=', '1'],['section', '=', '2-1-h1-intro']])->update(['body' => Input::get('Company-Intro')]);

          if(Input::get('Company-Intro-Body') != null){
            $content->where([['pages_id', '=', '1'],['section', '=', '2-1-p-body']])->update(['body' => Input::get('Company-Intro-Body')]);
          }
        }
        elseif (Input::get('Company-Intro-Body') != null) {
          $content->where([['pages_id', '=', '1'],['section', '=', '2-1-p-body']])->update(['body' => Input::get('Company-Intro-Body')]);
        }
        elseif (Input::get('4-submit')) {
          $content->where([['pages_id', '=', '1'],['section', '=', '2-1-btn-link']])->update(['body' => Input::get('Company-Intro-Link')]);
        }
        elseif (Input::get('Company-Intro-li1') != null) {
          $content->where([['pages_id', '=', '1'],['section', '=', '2-2-ul-li-1']])->update(['body' => Input::get('Company-Intro-li1')]);
          if(Input::get('Company-Intro-li2') != null){
            $content->where([['pages_id', '=', '1'],['section', '=', '2-2-ul-li-2']])->update(['body' => Input::get('Company-Intro-li2')]);
            if(Input::get('Company-Intro-li3') != null){
              $content->where([['pages_id', '=', '1'],['section', '=', '2-2-ul-li-3']])->update(['body' => Input::get('Company-Intro-li3')]);
              if(Input::get('Company-Intro-li4') != null){
                $content->where([['pages_id', '=', '1'],['section', '=', '2-2-ul-li-4']])->update(['body' => Input::get('Company-Intro-li4')]);
              }
            }

          }
        }
        elseif (Input::get('Company-Intro-li2') != null){
          $content->where([['pages_id', '=', '1'],['section', '=', '2-2-ul-li-2']])->update(['body' => Input::get('Company-Intro-li2')]);
          if(Input::get('Company-Intro-li3') != null){
            $content->where([['pages_id', '=', '1'],['section', '=', '2-2-ul-li-3']])->update(['body' => Input::get('Company-Intro-li3')]);
            if(Input::get('Company-Intro-li4') != null){
              $content->where([['pages_id', '=', '1'],['section', '=', '2-2-ul-li-4']])->update(['body' => Input::get('Company-Intro-li4')]);
            }
          }
        }
        elseif (Input::get('Company-Intro-li3') != null) {
          $content->where([['pages_id', '=', '1'],['section', '=', '2-2-ul-li-3']])->update(['body' => Input::get('Company-Intro-li3')]);
          if(Input::get('Company-Intro-li4') != null){
            $content->where([['pages_id', '=', '1'],['section', '=', '2-2-ul-li-4']])->update(['body' => Input::get('Company-Intro-li4')]);
          }
        }
        elseif (Input::get('Company-Intro-li4') != null) {
          $content->where([['pages_id', '=', '1'],['section', '=', '2-2-ul-li-4']])->update(['body' => Input::get('Company-Intro-li4')]);
        }
      }
      return redirect('/dashboard');
    }

    //Home Internet
    public function updateHomeInternet(Request $request)
    {

      $content = new Content;

      if(Auth::check())
      {

        if(Input::get('Internet-Introduction') != null)
        {
          $content->where([['pages_id', '=', '1'],['section', '=', '3-1-h1']])->update(['body' => Input::get('Internet-Introduction')]);
          if($request->hasFile('Internet-Img1'))
          {

            $img = $request->file('Internet-Img1');
            $filename = time() . '.' . $img->getClientOriginalExtension();
            $location = public_path('img/production/' . $filename);
            $dataLocation = 'img/production/' . $filename;
            Image::make($img)->save($location);

            $content->where([['pages_id', '=', '1'],['section', '=', '3-1-img']])->update(['body' => $dataLocation]);

            if (Input::get('Internet-Paragraph') != null)
            {
              $content->where([['pages_id', '=', '1'],['section', '=', '3-1-p']])->update(['body' => Input::get('Internet-Paragraph')]);
              if(Input::get('Internet-li-1') != null)
              {
                $content->where([['pages_id', '=', '1'],['section', '=', '3-1-li-1']])->update(['body' => Input::get('Internet-li-1')]);
                if(Input::get('Internet-li-2') != null)
                {
                  $content->where([['pages_id', '=', '1'],['section', '=', '3-1-li-2']])->update(['body' => Input::get('Internet-li-2')]);
                  if(Input::get('Internet-li-3') != null)
                  {
                    $content->where([['pages_id', '=', '1'],['section', '=', '3-1-li-3']])->update(['body' => Input::get('Internet-li-3')]);
                    if(Input::get('Internet-li-4') != null)
                    {
                      $content->where([['pages_id', '=', '1'],['section', '=', '3-1-li-4']])->update(['body' => Input::get('Internet-li-4')]);
                    }
                  }
                }
              }
            }
          }
        }
        elseif ($request->hasFile('Internet-Img1'))
        {
          $img = $request->file('Internet-Img1');
          $filename = time() . '.' . $img->getClientOriginalExtension();
          $location = public_path('img/production/' . $filename);
          $dataLocation = 'img/production/' . $filename;
          Image::make($img)->save($location);

          $content->where([['pages_id', '=', '1'],['section', '=', '3-1-img']])->update(['body' => $dataLocation]);

          if (Input::get('Internet-Paragraph') != null)
          {
            $content->where([['pages_id', '=', '1'],['section', '=', '3-1-p']])->update(['body' => Input::get('Internet-Paragraph')]);
            if(Input::get('Internet-li-1') != null)
            {
              $content->where([['pages_id', '=', '1'],['section', '=', '3-1-li-1']])->update(['body' => Input::get('Internet-li-1')]);
              if(Input::get('Internet-li-2') != null)
              {
                $content->where([['pages_id', '=', '1'],['section', '=', '3-1-li-2']])->update(['body' => Input::get('Internet-li-2')]);
                if(Input::get('Internet-li-3') != null)
                {
                  $content->where([['pages_id', '=', '1'],['section', '=', '3-1-li-3']])->update(['body' => Input::get('Internet-li-3')]);
                  if(Input::get('Internet-li-4') != null)
                  {
                    $content->where([['pages_id', '=', '1'],['section', '=', '3-1-li-4']])->update(['body' => Input::get('Internet-li-4')]);
                  }
                }
              }
            }
          }
        }
        elseif (Input::get('Internet-Paragraph') != null)
        {
          $content->where([['pages_id', '=', '1'],['section', '=', '3-1-p']])->update(['body' => Input::get('Internet-Paragraph')]);
          if(Input::get('Internet-li-1') != null)
          {
            $content->where([['pages_id', '=', '1'],['section', '=', '3-1-li-1']])->update(['body' => Input::get('Internet-li-1')]);
            if(Input::get('Internet-li-2') != null)
            {
              $content->where([['pages_id', '=', '1'],['section', '=', '3-1-li-2']])->update(['body' => Input::get('Internet-li-2')]);
              if(Input::get('Internet-li-3') != null)
              {
                $content->where([['pages_id', '=', '1'],['section', '=', '3-1-li-3']])->update(['body' => Input::get('Internet-li-3')]);
                if(Input::get('Internet-li-4') != null)
                {
                  $content->where([['pages_id', '=', '1'],['section', '=', '3-1-li-4']])->update(['body' => Input::get('Internet-li-4')]);
                }
              }
            }
          }
        }
        elseif (Input::get('Internet-li-1') != null)
        {
          $content->where([['pages_id', '=', '1'],['section', '=', '3-1-li-1']])->update(['body' => Input::get('Internet-li-1')]);
          if(Input::get('Internet-li-2') != null)
          {
            $content->where([['pages_id', '=', '1'],['section', '=', '3-1-li-2']])->update(['body' => Input::get('Internet-li-2')]);
            if(Input::get('Internet-li-3') != null)
            {
              $content->where([['pages_id', '=', '1'],['section', '=', '3-1-li-3']])->update(['body' => Input::get('Internet-li-3')]);
              if(Input::get('Internet-li-4') != null)
              {
                $content->where([['pages_id', '=', '1'],['section', '=', '3-1-li-4']])->update(['body' => Input::get('Internet-li-4')]);
              }
            }
          }
        }
        elseif (Input::get('Internet-li-3') != null)
        {
          $content->where([['pages_id', '=', '1'],['section', '=', '3-1-li-3']])->update(['body' => Input::get('Internet-li-3')]);
          if(Input::get('Internet-li-4') != null)
          {
            $content->where([['pages_id', '=', '1'],['section', '=', '3-1-li-4']])->update(['body' => Input::get('Internet-li-4')]);
          }
        }
        elseif (Input::get('Internet-li-4') != null)
        {
          $content->where([['pages_id', '=', '1'],['section', '=', '3-1-li-4']])->update(['body' => Input::get('Internet-li-4')]);
        }

        if (Input::get('1-Internet-Link-submit'))
        {
          $content->where([['pages_id', '=', '1'],['section', '=', '3-1-btn-link']])->update(['body' => Input::get('Internet-Intro-Link')]);
        }

        return redirect('/dashboard');
      }
    }

    // Home Networking
    public function updateHomeNetworking(Request $request)
    {

      $content = new Content;

      if(Auth::check())
      {
        if(Input::get('Networking-Introduction') != null)
        {
          $content->where([['pages_id', '=', '1'],['section', '=', '3-2-h1']])->update(['body' => Input::get('Networking-Introduction')]);
          if(Input::get('Networking-li-1') != null)
          {
            $content->where([['pages_id', '=', '1'],['section', '=', '3-2-li-1']])->update(['body' => Input::get('Networking-li-1')]);
            if(Input::get('Networking-li-2') != null)
            {
              $content->where([['pages_id', '=', '1'],['section', '=', '3-2-li-2']])->update(['body' => Input::get('Networking-li-2')]);
              if(Input::get('Networking-li-3') != null)
              {
                $content->where([['pages_id', '=', '1'],['section', '=', '3-2-li-3']])->update(['body' => Input::get('Networking-li-3')]);
                if(Input::get('Networking-li-4') != null)
                {
                  $content->where([['pages_id', '=', '1'],['section', '=', '3-2-li-4']])->update(['body' => Input::get('Networking-li-4')]);
                  if(Input::get('Networking-Paragraph') != null)
                  {
                    $content->where([['pages_id', '=', '1'],['section', '=', '3-2-p']])->update(['body' => Input::get('Networking-Paragraph')]);
                    if($request->hasFile('Networking-Img1'))
                    {
                      $img = $request->file('Networking-Img1');
                      $filename = time() . '.' . $img->getClientOriginalExtension();
                      $location = public_path('img/production/' . $filename);
                      $dataLocation = 'img/production/' . $filename;
                      Image::make($img)->save($location);

                      $content->where([['pages_id', '=', '1'],['section', '=', '3-2-img']])->update(['body' => $dataLocation]);
                    }
                  }
                }
              }
            }
          }
        }
        elseif(Input::get('Networking-li-1') != null)
        {
          $content->where([['pages_id', '=', '1'],['section', '=', '3-2-li-1']])->update(['body' => Input::get('Networking-li-1')]);
          if(Input::get('Networking-li-2') != null)
          {
            $content->where([['pages_id', '=', '1'],['section', '=', '3-2-li-2']])->update(['body' => Input::get('Networking-li-2')]);
            if(Input::get('Networking-li-3') != null)
            {
              $content->where([['pages_id', '=', '1'],['section', '=', '3-2-li-3']])->update(['body' => Input::get('Networking-li-3')]);
              if(Input::get('Networking-li-4') != null)
              {
                $content->where([['pages_id', '=', '1'],['section', '=', '3-2-li-4']])->update(['body' => Input::get('Networking-li-4')]);
                if(Input::get('Networking-Paragraph') != null)
                {
                  $content->where([['pages_id', '=', '1'],['section', '=', '3-2-p']])->update(['body' => Input::get('Networking-Paragraph')]);
                  if($request->hasFile('Networking-Img1'))
                  {
                    $img = $request->file('Networking-Img1');
                    $filename = time() . '.' . $img->getClientOriginalExtension();
                    $location = public_path('img/production/' . $filename);
                    $dataLocation = 'img/production/' . $filename;
                    Image::make($img)->save($location);

                    $content->where([['pages_id', '=', '1'],['section', '=', '3-2-img']])->update(['body' => $dataLocation]);
                  }
                }
              }
            }
          }
        }
        elseif(Input::get('Networking-li-2') != null)
        {
          $content->where([['pages_id', '=', '1'],['section', '=', '3-2-li-2']])->update(['body' => Input::get('Networking-li-2')]);
          if(Input::get('Networking-li-3') != null)
          {
            $content->where([['pages_id', '=', '1'],['section', '=', '3-2-li-3']])->update(['body' => Input::get('Networking-li-3')]);
            if(Input::get('Networking-li-4') != null)
            {
              $content->where([['pages_id', '=', '1'],['section', '=', '3-2-li-4']])->update(['body' => Input::get('Networking-li-4')]);
              if(Input::get('Networking-Paragraph') != null)
              {
                $content->where([['pages_id', '=', '1'],['section', '=', '3-2-p']])->update(['body' => Input::get('Networking-Paragraph')]);
                if($request->hasFile('Networking-Img1'))
                {
                  $img = $request->file('Networking-Img1');
                  $filename = time() . '.' . $img->getClientOriginalExtension();
                  $location = public_path('img/production/' . $filename);
                  $dataLocation = 'img/production/' . $filename;
                  Image::make($img)->save($location);

                  $content->where([['pages_id', '=', '1'],['section', '=', '3-2-img']])->update(['body' => $dataLocation]);
                }
              }
            }
          }
        }
        elseif(Input::get('Networking-li-3') != null)
        {
          $content->where([['pages_id', '=', '1'],['section', '=', '3-2-li-3']])->update(['body' => Input::get('Networking-li-3')]);
          if(Input::get('Networking-li-4') != null)
          {
            $content->where([['pages_id', '=', '1'],['section', '=', '3-2-li-4']])->update(['body' => Input::get('Networking-li-4')]);
            if(Input::get('Networking-Paragraph') != null)
            {
              $content->where([['pages_id', '=', '1'],['section', '=', '3-2-p']])->update(['body' => Input::get('Networking-Paragraph')]);
              if($request->hasFile('Networking-Img1'))
              {
                $img = $request->file('Networking-Img1');
                $filename = time() . '.' . $img->getClientOriginalExtension();
                $location = public_path('img/production/' . $filename);
                $dataLocation = 'img/production/' . $filename;
                Image::make($img)->save($location);

                $content->where([['pages_id', '=', '1'],['section', '=', '3-2-img']])->update(['body' => $dataLocation]);
              }
            }
          }
        }
        elseif(Input::get('Networking-li-4') != null)
        {
          $content->where([['pages_id', '=', '1'],['section', '=', '3-2-li-4']])->update(['body' => Input::get('Networking-li-4')]);
          if(Input::get('Networking-Paragraph') != null)
          {
            $content->where([['pages_id', '=', '1'],['section', '=', '3-2-p']])->update(['body' => Input::get('Networking-Paragraph')]);
            if($request->hasFile('Networking-Img1'))
            {
              $img = $request->file('Networking-Img1');
              $filename = time() . '.' . $img->getClientOriginalExtension();
              $location = public_path('img/production/' . $filename);
              $dataLocation = 'img/production/' . $filename;
              Image::make($img)->save($location);

              $content->where([['pages_id', '=', '1'],['section', '=', '3-2-img']])->update(['body' => $dataLocation]);
            }
          }
        }
        elseif(Input::get('Networking-Paragraph') != null)
        {
          $content->where([['pages_id', '=', '1'],['section', '=', '3-2-p']])->update(['body' => Input::get('Networking-Paragraph')]);
          if($request->hasFile('Networking-Img1'))
          {
            $img = $request->file('Networking-Img1');
            $filename = time() . '.' . $img->getClientOriginalExtension();
            $location = public_path('img/production/' . $filename);
            $dataLocation = 'img/production/' . $filename;
            Image::make($img)->save($location);

            $content->where([['pages_id', '=', '1'],['section', '=', '3-2-img']])->update(['body' => $dataLocation]);
          }
        }
        elseif($request->hasFile('Networking-Img1'))
        {
          $img = $request->file('Networking-Img1');
          $filename = time() . '.' . $img->getClientOriginalExtension();
          $location = public_path('img/production/' . $filename);
          $dataLocation = 'img/production/' . $filename;
          Image::make($img)->save($location);

          $content->where([['pages_id', '=', '1'],['section', '=', '3-2-img']])->update(['body' => $dataLocation]);
        }
        elseif(Input::get('1-Networking-Link-submit'))
        {
          $content->where([['pages_id', '=', '1'],['section', '=', '3-2-btn-link']])->update(['body' => Input::get('Networking-Intro-Link')]);
        }

        return redirect('/dashboard');
      }
    }

    public function updateHomeSoftDev(Request $request)
    {
        $content = new Content;

        if(Auth::check())
        {
            if($request->hasFile('soft-img-1'))
            {
                $img = $request->file('soft-img-1');
                $filename = time() . '.' . $img->getClientOriginalExtension();
                $location = public_path('img/production/' . $filename);
                $dataLocation = 'img/production/' . $filename;
                Image::make($img)->save($location);

                $content->where([['pages_id', '=', '1'],['section', '=', '4-img-1']])->update(['body' => $dataLocation]);

                if(Input::get('softDev-h1') != null)
                {
                    $content->where([['pages_id', '=', '1'],['section', '=', '4-1-img1-h1']])->update(['body' => Input::get('softDev-h1')]);

                    if(Input::get('softDev-li-1') != null)
                    {
                        $content->where([['pages_id', '=', '1'],['section', '=', '4-1-img1-li-1']])->update(['body' => Input::get('softDev-li-1')]);

                        if(Input::get('softDev-li-2') != null)
                        {
                            $content->where([['pages_id', '=', '1'],['section', '=', '4-1-img1-li-2']])->update(['body' => Input::get('softDev-li-2')]);

                            if(Input::get('softDev-li-3') != null)
                            {
                                $content->where([['pages_id', '=', '1'],['section', '=', '4-1-img1-li-3']])->update(['body' => Input::get('softDev-li-3')]);

                                if(Input::get('softDev-li-4') != null)
                                {
                                    $content->where([['pages_id', '=', '1'],['section', '=', '4-1-img1-li-4']])->update(['body' => Input::get('softDev-li-4')]);

                                    if(Input::get('SoftDev-Link-submit'))
                                    {
                                        $content->where([['pages_id', '=', '1'],['section', '=', '4-1-link']])->update(['body' => Input::get('SoftDev-Intro-Link')]);
                                    }
                                }
                            }
                        }
                    }
                }
                elseif(Input::get('softDev-h1') != null)
                {
                    $content->where([['pages_id', '=', '1'],['section', '=', '4-1-img1-h1']])->update(['body' => Input::get('softDev-h1')]);

                    if(Input::get('softDev-li-1') != null)
                    {
                        $content->where([['pages_id', '=', '1'],['section', '=', '4-1-img1-li-1']])->update(['body' => Input::get('softDev-li-1')]);

                        if(Input::get('softDev-li-2') != null)
                        {
                            $content->where([['pages_id', '=', '1'],['section', '=', '4-1-img1-li-2']])->update(['body' => Input::get('softDev-li-2')]);

                            if(Input::get('softDev-li-3') != null)
                            {
                                $content->where([['pages_id', '=', '1'],['section', '=', '4-1-img1-li-3']])->update(['body' => Input::get('softDev-li-3')]);

                                if(Input::get('softDev-li-4') != null)
                                {
                                    $content->where([['pages_id', '=', '1'],['section', '=', '4-1-img1-li-4']])->update(['body' => Input::get('softDev-li-4')]);

                                    if(Input::get('SoftDev-Link-submit'))
                                    {
                                        $content->where([['pages_id', '=', '1'],['section', '=', '4-1-link']])->update(['body' => Input::get('SoftDev-Intro-Link')]);
                                    }
                                }
                            }
                        }
                    }
                }
                elseif(Input::get('softDev-li-1') != null)
                {
                    $content->where([['pages_id', '=', '1'],['section', '=', '4-1-img1-li-1']])->update(['body' => Input::get('softDev-li-1')]);

                    if(Input::get('softDev-li-2') != null)
                    {
                        $content->where([['pages_id', '=', '1'],['section', '=', '4-1-img1-li-2']])->update(['body' => Input::get('softDev-li-2')]);

                        if(Input::get('softDev-li-3') != null)
                        {
                            $content->where([['pages_id', '=', '1'],['section', '=', '4-1-img1-li-3']])->update(['body' => Input::get('softDev-li-3')]);

                            if(Input::get('softDev-li-4') != null)
                            {
                                $content->where([['pages_id', '=', '1'],['section', '=', '4-1-img1-li-4']])->update(['body' => Input::get('softDev-li-4')]);

                                if(Input::get('SoftDev-Link-submit'))
                                {
                                    $content->where([['pages_id', '=', '1'],['section', '=', '4-1-link']])->update(['body' => Input::get('SoftDev-Intro-Link')]);
                                }
                            }
                        }
                    }
                }
                elseif(Input::get('softDev-li-2') != null)
                {
                    $content->where([['pages_id', '=', '1'],['section', '=', '4-1-img1-li-2']])->update(['body' => Input::get('softDev-li-2')]);

                    if(Input::get('softDev-li-3') != null)
                    {
                        $content->where([['pages_id', '=', '1'],['section', '=', '4-1-img1-li-3']])->update(['body' => Input::get('softDev-li-3')]);

                        if(Input::get('softDev-li-4') != null)
                        {
                            $content->where([['pages_id', '=', '1'],['section', '=', '4-1-img1-li-4']])->update(['body' => Input::get('softDev-li-4')]);

                            if(Input::get('SoftDev-Link-submit'))
                            {
                                $content->where([['pages_id', '=', '1'],['section', '=', '4-1-link']])->update(['body' => Input::get('SoftDev-Intro-Link')]);
                            }
                        }
                    }
                }
                elseif(Input::get('softDev-li-3') != null)
                {
                    $content->where([['pages_id', '=', '1'],['section', '=', '4-1-img1-li-3']])->update(['body' => Input::get('softDev-li-3')]);

                    if(Input::get('softDev-li-4') != null)
                    {
                        $content->where([['pages_id', '=', '1'],['section', '=', '4-1-img1-li-4']])->update(['body' => Input::get('softDev-li-4')]);

                        if(Input::get('SoftDev-Link-submit'))
                        {
                            $content->where([['pages_id', '=', '1'],['section', '=', '4-1-link']])->update(['body' => Input::get('SoftDev-Intro-Link')]);
                        }
                    }
                }
                elseif(Input::get('softDev-li-4') != null)
                {
                    $content->where([['pages_id', '=', '1'],['section', '=', '4-1-img1-li-4']])->update(['body' => Input::get('softDev-li-4')]);

                    if(Input::get('SoftDev-Link-submit'))
                    {
                        $content->where([['pages_id', '=', '1'],['section', '=', '4-1-link']])->update(['body' => Input::get('SoftDev-Intro-Link')]);
                    }
                }
                elseif(Input::get('SoftDev-Link-submit'))
                {
                    $content->where([['pages_id', '=', '1'],['section', '=', '4-1-link']])->update(['body' => Input::get('SoftDev-Intro-Link')]);
                }
            }

            return redirect('/dashboard');
        }
    }

    public function updateHomeSoftMen(Request $request)
    {
        $content = new Content;

        if(Auth::check())
        {
            if ($request->hasFile('soft-img-2'))
            {
                  $img = $request->file('soft-img-2');
                  $filename = time() . '.' . $img->getClientOriginalExtension();
                  $location = public_path('img/production/' . $filename);
                  $dataLocation = 'img/production/' . $filename;
                  Image::make($img)->save($location);

                  $content->where([['pages_id', '=', '1'],['section', '=', '4-img-2']])->update(['body' => $dataLocation]);

                  if (Input::get('softMen-h1') != null)
                  {
                    $content->where([['pages_id', '=', '1'],['section', '=', '4-2-img2-h1']])->update(['body' => Input::get('softMen-h1')]);

                    if(Input::get('softMen-li-1') != null)
                    {
                      $content->where([['pages_id', '=', '1'],['section', '=', '4-2-img2-li-1']])->update(['body' => Input::get('softMen-li-1')]);
                      if(Input::get('softMen-li-2') != null)
                      {
                        $content->where([['pages_id', '=', '1'],['section', '=', '4-2-img2-li-2']])->update(['body' => Input::get('softMen-li-2')]);
                        if(Input::get('softMen-li-3') != null)
                        {
                          $content->where([['pages_id', '=', '1'],['section', '=', '4-2-img2-li-3']])->update(['body' => Input::get('softMen-li-3')]);
                          if(Input::get('softMen-li-4') != null)
                          {
                            $content->where([['pages_id', '=', '1'],['section', '=', '4-2-img2-li-4']])->update(['body' => Input::get('softMen-li-4')]);
                            if(Input::get('SoftMen-Link-submit'))
                            {
                              $content->where([['pages_id', '=', '1'],['section', '=', '4-2-link']])->update(['body' => Input::get('SoftMen-Intro-Link')]);
                            }
                          }
                        }
                      }
                    }
                  }
            }
            elseif(Input::get('softMen-h1') != null)
            {
              $content->where([['pages_id', '=', '1'],['section', '=', '4-2-img2-h1']])->update(['body' => Input::get('softMen-h1')]);

              if(Input::get('softMen-li-1') != null)
              {
                $content->where([['pages_id', '=', '1'],['section', '=', '4-2-img2-li-1']])->update(['body' => Input::get('softMen-li-1')]);
                if(Input::get('softMen-li-2') != null)
                {
                  $content->where([['pages_id', '=', '1'],['section', '=', '4-2-img2-li-2']])->update(['body' => Input::get('softMen-li-2')]);
                  if(Input::get('softMen-li-3') != null)
                  {
                    $content->where([['pages_id', '=', '1'],['section', '=', '4-2-img2-li-3']])->update(['body' => Input::get('softMen-li-3')]);
                    if(Input::get('softMen-li-4') != null)
                    {
                      $content->where([['pages_id', '=', '1'],['section', '=', '4-2-img2-li-4']])->update(['body' => Input::get('softMen-li-4')]);
                      if(Input::get('SoftMen-Link-submit'))
                      {
                        $content->where([['pages_id', '=', '1'],['section', '=', '4-2-link']])->update(['body' => Input::get('SoftMen-Intro-Link')]);
                      }
                    }
                  }
                }
              }
            }
            elseif(Input::get('softMen-li-1') != null)
            {
              $content->where([['pages_id', '=', '1'],['section', '=', '4-2-img2-li-1']])->update(['body' => Input::get('softMen-li-1')]);
              if(Input::get('softMen-li-2') != null)
              {
                $content->where([['pages_id', '=', '1'],['section', '=', '4-2-img2-li-2']])->update(['body' => Input::get('softMen-li-2')]);
                if(Input::get('softMen-li-3') != null)
                {
                  $content->where([['pages_id', '=', '1'],['section', '=', '4-2-img2-li-3']])->update(['body' => Input::get('softMen-li-3')]);
                  if(Input::get('softMen-li-4') != null)
                  {
                    $content->where([['pages_id', '=', '1'],['section', '=', '4-2-img2-li-4']])->update(['body' => Input::get('softMen-li-4')]);
                    if(Input::get('SoftMen-Link-submit'))
                    {
                      $content->where([['pages_id', '=', '1'],['section', '=', '4-2-link']])->update(['body' => Input::get('SoftMen-Intro-Link')]);
                    }
                  }
                }
              }
            }
            elseif(Input::get('softMen-li-2') != null)
            {
              $content->where([['pages_id', '=', '1'],['section', '=', '4-2-img2-li-2']])->update(['body' => Input::get('softMen-li-2')]);
              if(Input::get('softMen-li-3') != null)
              {
                $content->where([['pages_id', '=', '1'],['section', '=', '4-2-img2-li-3']])->update(['body' => Input::get('softMen-li-3')]);
                if(Input::get('softMen-li-4') != null)
                {
                  $content->where([['pages_id', '=', '1'],['section', '=', '4-2-img2-li-4']])->update(['body' => Input::get('softMen-li-4')]);
                  if(Input::get('SoftMen-Link-submit'))
                  {
                    $content->where([['pages_id', '=', '1'],['section', '=', '4-2-link']])->update(['body' => Input::get('SoftMen-Intro-Link')]);
                  }
                }
              }
            }
            elseif(Input::get('softMen-li-3') != null)
            {
              $content->where([['pages_id', '=', '1'],['section', '=', '4-2-img2-li-3']])->update(['body' => Input::get('softMen-li-3')]);
              if(Input::get('softMen-li-4') != null)
              {
                $content->where([['pages_id', '=', '1'],['section', '=', '4-2-img2-li-4']])->update(['body' => Input::get('softMen-li-4')]);
                if(Input::get('SoftMen-Link-submit'))
                {
                  $content->where([['pages_id', '=', '1'],['section', '=', '4-2-link']])->update(['body' => Input::get('SoftMen-Intro-Link')]);
                }
              }
            }
            elseif(Input::get('softMen-li-4') != null)
            {
              $content->where([['pages_id', '=', '1'],['section', '=', '4-2-img2-li-4']])->update(['body' => Input::get('softMen-li-4')]);
              if(Input::get('SoftMen-Link-submit'))
              {
                $content->where([['pages_id', '=', '1'],['section', '=', '4-2-link']])->update(['body' => Input::get('SoftMen-Intro-Link')]);
              }
            }
            elseif(Input::get('SoftMen-Link-submit'))
            {
              $content->where([['pages_id', '=', '1'],['section', '=', '4-2-link']])->update(['body' => Input::get('SoftMen-Intro-Link')]);
            }
            return redirect('/dashboard');
        }
    }

    public function updateOfficeSpace(Request $request)
    {
      $content = new Content;

      if(Auth::check())
      {

      }
    }
  }
