<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Content;
use Illuminate\Support\Facades\Auth;
use Image;

class DashboardController extends Controller
{
    public function updateHome(Request $request){

      // Cover image
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
}
