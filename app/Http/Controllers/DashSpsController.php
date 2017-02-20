<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Content;
use Illuminate\Support\Facades\Auth;
use Image;

class DashSpsController extends Controller {

    public function updateSpsIntro(Request $request) {
        $content = new Content;

        if (Auth::check()) {

            if (Input::get('1-spsIntro-h1-1') != null) {
                $content->where([['pages_id', '=', '4'], ['section', '=', '4-1-1-h1']])->update(['body' => Input::get('1-spsIntro-h1-1')]);
                if (Input::get('1-spsIntro-h2-1') != null) {
                    $content->where([['pages_id', '=', '4'], ['section', '=', '4-1-1-h2']])->update(['body' => Input::get('1-spsIntro-h2-1')]);
                    if (Input::get('1-spsIntro-p-1') != null) {
                        $content->where([['pages_id', '=', '4'], ['section', '=', '4-1-1-p']])->update(['body' => Input::get('1-spsIntro-p-1')]);
                    }
                }
            } elseif (Input::get('1-spsIntro-h2-1') != null) {
                $content->where([['pages_id', '=', '4'], ['section', '=', '4-1-1-h2']])->update(['body' => Input::get('1-spsIntro-h2-1')]);
                if (Input::get('1-spsIntro-p-1') != null) {
                    $content->where([['pages_id', '=', '4'], ['section', '=', '4-1-1-p']])->update(['body' => Input::get('1-spsIntro-p-1')]);
                }
            } elseif (Input::get('1-spsIntro-p-1') != null) {
                $content->where([['pages_id', '=', '4'], ['section', '=', '4-1-1-p']])->update(['body' => Input::get('1-spsIntro-p-1')]);
            }

            return redirect('dash-sps');
        }
    }

    public function updateSpsSec2(Request $request) {
        $content = new Content;

        if (Auth::check()) {
            if (Input::get('1-spsSec2-li-1') != null) {
                $content->where([['pages_id', '=', '4'], ['section', '=', '4-2-2-li-1']])->update(['body' => Input::get('1-spsSec2-li-1')]);
                if (Input::get('1-spsSec2-li-2') != null) {
                    $content->where([['pages_id', '=', '4'], ['section', '=', '4-2-2-li-2']])->update(['body' => Input::get('1-spsSec2-li-2')]);
                    if (Input::get('1-spsSec2-li-3') != null) {
                        $content->where([['pages_id', '=', '4'], ['section', '=', '4-2-2-li-3']])->update(['body' => Input::get('1-spsSec2-li-3')]);
                        if (Input::get('1-spsSec2-li-4') != null) {
                            $content->where([['pages_id', '=', '4'], ['section', '=', '4-2-2-li-4']])->update(['body' => Input::get('1-spsSec2-li-4')]);
                            if ($request->hasFile('1-spsSec2-img-1')) {
                                $img = $request->file('1-spsSec2-img-1');
                                $filename = time() . '.' . $img->getClientOriginalExtension();
                                $location = public_path('img/production/' . $filename);
                                $dataLocation = 'img/production/' . $filename;
                                Image::make($img)->save($location);

                                $content->where([['pages_id', '=', '4'], ['section', '=', '4-2-1-img']])->update(['body' => $dataLocation]);
                            }
                        }
                    }
                }
            } elseif (Input::get('1-spsSec2-li-2') != null) {
                $content->where([['pages_id', '=', '4'], ['section', '=', '4-2-2-li-2']])->update(['body' => Input::get('1-spsSec2-li-2')]);
                if (Input::get('1-spsSec2-li-3') != null) {
                    $content->where([['pages_id', '=', '4'], ['section', '=', '4-2-2-li-3']])->update(['body' => Input::get('1-spsSec2-li-3')]);
                    if (Input::get('1-spsSec2-li-4') != null) {
                        $content->where([['pages_id', '=', '4'], ['section', '=', '4-2-2-li-4']])->update(['body' => Input::get('1-spsSec2-li-4')]);
                        if ($request->hasFile('1-spsSec2-img-1')) {
                            $img = $request->file('1-spsSec2-img-1');
                            $filename = time() . '.' . $img->getClientOriginalExtension();
                            $location = public_path('img/production/' . $filename);
                            $dataLocation = 'img/production/' . $filename;
                            Image::make($img)->save($location);

                            $content->where([['pages_id', '=', '4'], ['section', '=', '4-2-1-img']])->update(['body' => $dataLocation]);
                        }
                    }
                }
            } elseif (Input::get('1-spsSec2-li-3') != null) {
                $content->where([['pages_id', '=', '4'], ['section', '=', '4-2-2-li-3']])->update(['body' => Input::get('1-spsSec2-li-3')]);
                if (Input::get('1-spsSec2-li-4') != null) {
                    $content->where([['pages_id', '=', '4'], ['section', '=', '4-2-2-li-4']])->update(['body' => Input::get('1-spsSec2-li-4')]);
                    if ($request->hasFile('1-spsSec2-img-1')) {
                        $img = $request->file('1-spsSec2-img-1');
                        $filename = time() . '.' . $img->getClientOriginalExtension();
                        $location = public_path('img/production/' . $filename);
                        $dataLocation = 'img/production/' . $filename;
                        Image::make($img)->save($location);

                        $content->where([['pages_id', '=', '4'], ['section', '=', '4-2-1-img']])->update(['body' => $dataLocation]);
                    }
                }
            } elseif (Input::get('1-spsSec2-li-4') != null) {
                $content->where([['pages_id', '=', '4'], ['section', '=', '4-2-2-li-4']])->update(['body' => Input::get('1-spsSec2-li-4')]);
                if ($request->hasFile('1-spsSec2-img-1')) {
                    $img = $request->file('1-spsSec2-img-1');
                    $filename = time() . '.' . $img->getClientOriginalExtension();
                    $location = public_path('img/production/' . $filename);
                    $dataLocation = 'img/production/' . $filename;
                    Image::make($img)->save($location);

                    $content->where([['pages_id', '=', '4'], ['section', '=', '4-2-1-img']])->update(['body' => $dataLocation]);
                }
            } elseif ($request->hasFile('1-spsSec2-img-1')) {
                $img = $request->file('1-spsSec2-img-1');
                $filename = time() . '.' . $img->getClientOriginalExtension();
                $location = public_path('img/production/' . $filename);
                $dataLocation = 'img/production/' . $filename;
                Image::make($img)->save($location);

                $content->where([['pages_id', '=', '4'], ['section', '=', '4-2-1-img']])->update(['body' => $dataLocation]);
            }
        }

        return redirect('dash-sps');
    }

    public function updateSpsTouchline(Request $request) {
        $content = new Content;

        if (Auth::check()) {

            if (Input::get('1-spsTouchline-p-1') != null) {
                $content->where([['pages_id', '=', '4'], ['section', '=', '4-3-1-p']])->update(['body' => Input::get('1-spsTouchline-p-1')]);
            }

            return redirect('dash-sps');
        }
    }

    public function updateSpsSec3(Request $request) {
        $content = new Content;

        if (Auth::check()) {

            if (Input::get('1-spsSec2-h1-1') != null) {
                $content->where([['pages_id', '=', '4'], ['section', '=', '4-4-1-h1']])->update(['body' => Input::get('1-spsSec2-h1-1')]);
                if (Input::get('1-spsSec3-p-1') != null) {
                    $content->where([['pages_id', '=', '4'], ['section', '=', '4-4-1-p']])->update(['body' => Input::get('1-spsSec3-p-1')]);
                    if ($request->hasFile('1-spsSec3-img-1')) {
                        $img = $request->file('1-spsSec3-img-1');
                        $filename = time() . '.' . $img->getClientOriginalExtension();
                        $location = public_path('img/production/' . $filename);
                        $dataLocation = 'img/production/' . $filename;
                        Image::make($img)->save($location);

                        $content->where([['pages_id', '=', '4'], ['section', '=', '4-4-2-img']])->update(['body' => $dataLocation]);
                    }
                }
            } elseif (Input::get('1-spsSec3-p-1') != null) {
                $content->where([['pages_id', '=', '4'], ['section', '=', '4-4-1-p']])->update(['body' => Input::get('1-spsSec3-p-1')]);
                if ($request->hasFile('1-spsSec3-img-1')) {
                    $img = $request->file('1-spsSec3-img-1');
                    $filename = time() . '.' . $img->getClientOriginalExtension();
                    $location = public_path('img/production/' . $filename);
                    $dataLocation = 'img/production/' . $filename;
                    Image::make($img)->save($location);

                    $content->where([['pages_id', '=', '4'], ['section', '=', '4-4-2-img']])->update(['body' => $dataLocation]);
                }
            } elseif ($request->hasFile('1-spsSec3-img-1')) {
                $img = $request->file('1-spsSec3-img-1');
                $filename = time() . '.' . $img->getClientOriginalExtension();
                $location = public_path('img/production/' . $filename);
                $dataLocation = 'img/production/' . $filename;
                Image::make($img)->save($location);

                $content->where([['pages_id', '=', '4'], ['section', '=', '4-4-2-img']])->update(['body' => $dataLocation]);
            }


            return redirect('dash-sps');
        }
    }

    public function updateSpsSec4(Request $request) {
        $content = new Content;

        if (Auth::check()) {
            if (Input::get('1-spsSec4-h1-1') != null) {
                $content->where([['pages_id', '=', '4'], ['section', '=', '4-5-1-h1']])->update(['body' => Input::get('1-spsSec4-h1-1')]);
                if (Input::get('1-spsSec4-p-1') != null) {
                    $content->where([['pages_id', '=', '4'], ['section', '=', '4-5-1-p']])->update(['body' => Input::get('1-spsSec4-p-1')]);
                    if (Input::get('1-spsSec4-h1-2') != null) {
                        $content->where([['pages_id', '=', '4'], ['section', '=', '4-5-2-h1']])->update(['body' => Input::get('1-spsSec4-h1-2')]);
                        if (Input::get('1-spsSec4-p-2') != null) {
                            $content->where([['pages_id', '=', '4'], ['section', '=', '4-5-2-p']])->update(['body' => Input::get('1-spsSec4-p-2')]);
                        }
                    }
                }
            } elseif (Input::get('1-spsSec4-p-1') != null) {
                $content->where([['pages_id', '=', '4'], ['section', '=', '4-5-1-p']])->update(['body' => Input::get('1-spsSec4-p-1')]);
                if (Input::get('1-spsSec4-h1-2') != null) {
                    $content->where([['pages_id', '=', '4'], ['section', '=', '4-5-2-h1']])->update(['body' => Input::get('1-spsSec4-h1-2')]);
                    if (Input::get('1-spsSec4-p-2') != null) {
                        $content->where([['pages_id', '=', '4'], ['section', '=', '4-5-2-p']])->update(['body' => Input::get('1-spsSec4-p-2')]);
                    }
                }
            } elseif (Input::get('1-spsSec4-h1-2') != null) {
                $content->where([['pages_id', '=', '4'], ['section', '=', '4-5-2-h1']])->update(['body' => Input::get('1-spsSec4-h1-2')]);
                if (Input::get('1-spsSec4-p-2') != null) {
                    $content->where([['pages_id', '=', '4'], ['section', '=', '4-5-2-p']])->update(['body' => Input::get('1-spsSec4-p-2')]);
                }
            } elseif (Input::get('1-spsSec4-p-2') != null) {
                $content->where([['pages_id', '=', '4'], ['section', '=', '4-5-2-p']])->update(['body' => Input::get('1-spsSec4-p-2')]);
            }

            return redirect('dash-sps');
        }
    }

}
