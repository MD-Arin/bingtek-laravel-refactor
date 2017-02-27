<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Content;
use Illuminate\Support\Facades\Auth;

class DashNavController extends Controller {

    public function updateProductsServices(Request $request) {
        $content = new Content;
        if (Auth::check()) {
            if (Input::get('1-navProductsServices-li-1') != null) {
                $content->where([['pages_id', '=', '8'], ['section', '=', '8-1-1-li-1']])->update(['body' => Input::get('1-navProductsServices-li-1')]);
                if (Input::get('1-navProductsServices-li-2') != null) {
                    $content->where([['pages_id', '=', '8'], ['section', '=', '8-1-1-li-2']])->update(['body' => Input::get('1-navProductsServices-li-2')]);
                    if (Input::get('1-navProductsServices-li-3') != null) {
                        $content->where([['pages_id', '=', '8'], ['section', '=', '8-1-1-li-3']])->update(['body' => Input::get('1-navProductsServices-li-3')]);
                        if (Input::get('1-navProductsServices-li-4') != null) {
                            $content->where([['pages_id', '=', '8'], ['section', '=', '8-1-1-li-4']])->update(['body' => Input::get('1-navProductsServices-li-4')]);
                        }
                    }
                }
            } elseif (Input::get('1-navProductsServices-li-2') != null) {
                $content->where([['pages_id', '=', '8'], ['section', '=', '8-1-1-li-2']])->update(['body' => Input::get('1-navProductsServices-li-2')]);
                if (Input::get('1-navProductsServices-li-3') != null) {
                    $content->where([['pages_id', '=', '8'], ['section', '=', '8-1-1-li-3']])->update(['body' => Input::get('1-navProductsServices-li-3')]);
                    if (Input::get('1-navProductsServices-li-4') != null) {
                        $content->where([['pages_id', '=', '8'], ['section', '=', '8-1-1-li-4']])->update(['body' => Input::get('1-navProductsServices-li-4')]);
                    }
                }
            } elseif (Input::get('1-navProductsServices-li-3') != null) {
                $content->where([['pages_id', '=', '8'], ['section', '=', '8-1-1-li-3']])->update(['body' => Input::get('1-navProductsServices-li-3')]);
                if (Input::get('1-navProductsServices-li-4') != null) {
                    $content->where([['pages_id', '=', '8'], ['section', '=', '8-1-1-li-4']])->update(['body' => Input::get('1-navProductsServices-li-4')]);
                }
            }
        } elseif (Input::get('1-navProductsServices-li-4') != null) {
            $content->where([['pages_id', '=', '8'], ['section', '=', '8-1-1-li-4']])->update(['body' => Input::get('1-navProductsServices-li-4')]);
        }
        return redirect('dash-nav');
    }

}
