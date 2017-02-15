<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Content;
use Illuminate\Support\Facades\Auth;
use Image;

class DashFpsController extends Controller
{
    public function updateFpsConnectivity(Request $request) {
        $content = new Content;

        if (Auth::check()) {
            if ($request->hasFile("1-fpsConnect-img-1")) {
                $img = $request->file('1-fpsConnect-img-1');
                $filename = time() . '.' . $img->getClientOriginalExtension();
                $location = public_path('img/production/' . $filename);
                $dataLocation = 'img/production/' . $filename;
                Image::make($img)->save($location);

                $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-1-img']])->update(['body' => $dataLocation]);
                if (Input::get('1-fpsConnect-h1-1') != null) {
                    $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-1-img-h1']])->update(['body' => Input::get('1-fpsConnect-h1-1')]);
                    if (Input::get('1-fpsConnect-h2-1') != null) {
                        $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-1-img-h2']])->update(['body' => Input::get('1-fpsConnect-h2-1')]);
                        if ($request->hasFile("1-fpsConnect-img-2")) {
                            $img = $request->file('1-fpsConnect-img-2');
                            $filename = time() . '.' . $img->getClientOriginalExtension();
                            $location = public_path('img/production/' . $filename);
                            $dataLocation = 'img/production/' . $filename;
                            Image::make($img)->save($location);

                            $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-2-img']])->update(['body' => $dataLocation]);
                            if (Input::get('1-fpsConnect-h1-2') != null) {
                                $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-2-img-h1']])->update(['body' => Input::get('1-fpsConnect-h1-2')]);
                                if (Input::get('1-fpsConnect-h2-2') != null) {
                                    $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-2-img-h2']])->update(['body' => Input::get('1-fpsConnect-h2-2')]);
                                    if ($request->hasFile("1-fpsConnect-img-3")) {
                                        $img = $request->file('1-fpsConnect-img-3');
                                        $filename = time() . '.' . $img->getClientOriginalExtension();
                                        $location = public_path('img/production/' . $filename);
                                        $dataLocation = 'img/production/' . $filename;
                                        Image::make($img)->save($location);

                                        $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-3-img']])->update(['body' => $dataLocation]);
                                        if (Input::get('1-fpsConnect-h1-2') != null) {
                                            $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-3-img-h1']])->update(['body' => Input::get('1-fpsConnect-h1-3')]);
                                            if (Input::get('1-fpsConnect-h2-2') != null) {
                                                $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-3-img-h2']])->update(['body' => Input::get('1-fpsConnect-h2-3')]);
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif (Input::get('1-fpsConnect-h1-1') != null) {
                $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-1-img-h1']])->update(['body' => Input::get('1-fpsConnect-h1-1')]);
                if (Input::get('1-fpsConnect-h2-1') != null) {
                    $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-1-img-h2']])->update(['body' => Input::get('1-fpsConnect-h2-1')]);
                    if ($request->hasFile("1-fpsConnect-img-2")) {
                        $img = $request->file('1-fpsConnect-img-2');
                        $filename = time() . '.' . $img->getClientOriginalExtension();
                        $location = public_path('img/production/' . $filename);
                        $dataLocation = 'img/production/' . $filename;
                        Image::make($img)->save($location);

                        $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-2-img']])->update(['body' => $dataLocation]);
                        if (Input::get('1-fpsConnect-h1-2') != null) {
                            $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-2-img-h1']])->update(['body' => Input::get('1-fpsConnect-h1-2')]);
                            if (Input::get('1-fpsConnect-h2-2') != null) {
                                $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-2-img-h2']])->update(['body' => Input::get('1-fpsConnect-h2-2')]);
                                if ($request->hasFile("1-fpsConnect-img-3")) {
                                    $img = $request->file('1-fpsConnect-img-3');
                                    $filename = time() . '.' . $img->getClientOriginalExtension();
                                    $location = public_path('img/production/' . $filename);
                                    $dataLocation = 'img/production/' . $filename;
                                    Image::make($img)->save($location);

                                    $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-3-img']])->update(['body' => $dataLocation]);
                                    if (Input::get('1-fpsConnect-h1-2') != null) {
                                        $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-3-img-h1']])->update(['body' => Input::get('1-fpsConnect-h1-3')]);
                                        if (Input::get('1-fpsConnect-h2-2') != null) {
                                            $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-3-img-h2']])->update(['body' => Input::get('1-fpsConnect-h2-3')]);
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif (Input::get('1-fpsConnect-h2-1') != null) {
                $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-1-img-h2']])->update(['body' => Input::get('1-fpsConnect-h2-1')]);
                if ($request->hasFile("1-fpsConnect-img-2")) {
                    $img = $request->file('1-fpsConnect-img-2');
                    $filename = time() . '.' . $img->getClientOriginalExtension();
                    $location = public_path('img/production/' . $filename);
                    $dataLocation = 'img/production/' . $filename;
                    Image::make($img)->save($location);

                    $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-2-img']])->update(['body' => $dataLocation]);
                    if (Input::get('1-fpsConnect-h1-2') != null) {
                        $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-2-img-h1']])->update(['body' => Input::get('1-fpsConnect-h1-2')]);
                        if (Input::get('1-fpsConnect-h2-2') != null) {
                            $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-2-img-h2']])->update(['body' => Input::get('1-fpsConnect-h2-2')]);
                            if ($request->hasFile("1-fpsConnect-img-3")) {
                                $img = $request->file('1-fpsConnect-img-3');
                                $filename = time() . '.' . $img->getClientOriginalExtension();
                                $location = public_path('img/production/' . $filename);
                                $dataLocation = 'img/production/' . $filename;
                                Image::make($img)->save($location);

                                $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-3-img']])->update(['body' => $dataLocation]);
                                if (Input::get('1-fpsConnect-h1-2') != null) {
                                    $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-3-img-h1']])->update(['body' => Input::get('1-fpsConnect-h1-3')]);
                                    if (Input::get('1-fpsConnect-h2-2') != null) {
                                        $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-3-img-h2']])->update(['body' => Input::get('1-fpsConnect-h2-3')]);
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif ($request->hasFile("1-fpsConnect-img-2")) {
                $img = $request->file('1-fpsConnect-img-2');
                $filename = time() . '.' . $img->getClientOriginalExtension();
                $location = public_path('img/production/' . $filename);
                $dataLocation = 'img/production/' . $filename;
                Image::make($img)->save($location);

                $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-2-img']])->update(['body' => $dataLocation]);
                if (Input::get('1-fpsConnect-h1-2') != null) {
                    $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-2-img-h1']])->update(['body' => Input::get('1-fpsConnect-h1-2')]);
                    if (Input::get('1-fpsConnect-h2-2') != null) {
                        $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-2-img-h2']])->update(['body' => Input::get('1-fpsConnect-h2-2')]);
                        if ($request->hasFile("1-fpsConnect-img-3")) {
                            $img = $request->file('1-fpsConnect-img-3');
                            $filename = time() . '.' . $img->getClientOriginalExtension();
                            $location = public_path('img/production/' . $filename);
                            $dataLocation = 'img/production/' . $filename;
                            Image::make($img)->save($location);

                            $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-3-img']])->update(['body' => $dataLocation]);
                            if (Input::get('1-fpsConnect-h1-2') != null) {
                                $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-3-img-h1']])->update(['body' => Input::get('1-fpsConnect-h1-3')]);
                                if (Input::get('1-fpsConnect-h2-2') != null) {
                                    $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-3-img-h2']])->update(['body' => Input::get('1-fpsConnect-h2-3')]);
                                }
                            }
                        }
                    }
                }
            } elseif (Input::get('1-fpsConnect-h1-2') != null) {
                $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-2-img-h1']])->update(['body' => Input::get('1-fpsConnect-h1-2')]);
                if (Input::get('1-fpsConnect-h2-2') != null) {
                    $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-2-img-h2']])->update(['body' => Input::get('1-fpsConnect-h2-2')]);
                    if ($request->hasFile("1-fpsConnect-img-3")) {
                        $img = $request->file('1-fpsConnect-img-3');
                        $filename = time() . '.' . $img->getClientOriginalExtension();
                        $location = public_path('img/production/' . $filename);
                        $dataLocation = 'img/production/' . $filename;
                        Image::make($img)->save($location);

                        $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-3-img']])->update(['body' => $dataLocation]);
                        if (Input::get('1-fpsConnect-h1-2') != null) {
                            $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-3-img-h1']])->update(['body' => Input::get('1-fpsConnect-h1-3')]);
                            if (Input::get('1-fpsConnect-h2-2') != null) {
                                $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-3-img-h2']])->update(['body' => Input::get('1-fpsConnect-h2-3')]);
                            }
                        }
                    }
                }
            } elseif (Input::get('1-fpsConnect-h2-2') != null) {
                $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-2-img-h2']])->update(['body' => Input::get('1-fpsConnect-h2-2')]);
                if ($request->hasFile("1-fpsConnect-img-3")) {
                    $img = $request->file('1-fpsConnect-img-3');
                    $filename = time() . '.' . $img->getClientOriginalExtension();
                    $location = public_path('img/production/' . $filename);
                    $dataLocation = 'img/production/' . $filename;
                    Image::make($img)->save($location);

                    $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-3-img']])->update(['body' => $dataLocation]);
                    if (Input::get('1-fpsConnect-h1-2') != null) {
                        $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-3-img-h1']])->update(['body' => Input::get('1-fpsConnect-h1-3')]);
                        if (Input::get('1-fpsConnect-h2-2') != null) {
                            $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-3-img-h2']])->update(['body' => Input::get('1-fpsConnect-h2-3')]);
                        }
                    }
                }
            } elseif ($request->hasFile("1-fpsConnect-img-3")) {
                $img = $request->file('1-fpsConnect-img-3');
                $filename = time() . '.' . $img->getClientOriginalExtension();
                $location = public_path('img/production/' . $filename);
                $dataLocation = 'img/production/' . $filename;
                Image::make($img)->save($location);

                $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-3-img']])->update(['body' => $dataLocation]);
                if (Input::get('1-fpsConnect-h1-2') != null) {
                    $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-3-img-h1']])->update(['body' => Input::get('1-fpsConnect-h1-3')]);
                    if (Input::get('1-fpsConnect-h2-2') != null) {
                        $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-3-img-h2']])->update(['body' => Input::get('1-fpsConnect-h2-3')]);
                    }
                }
            } elseif (Input::get('1-fpsConnect-h1-2') != null) {
                $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-3-img-h1']])->update(['body' => Input::get('1-fpsConnect-h1-3')]);
                if (Input::get('1-fpsConnect-h2-2') != null) {
                    $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-3-img-h2']])->update(['body' => Input::get('1-fpsConnect-h2-3')]);
                }
            } elseif (Input::get('1-fpsConnect-h2-2') != null) {
                $content->where([['pages_id', '=', '3'], ['section', '=', '3-1-3-img-h2']])->update(['body' => Input::get('1-fpsConnect-h2-3')]);
            }
        }
        return redirect('dash-fps');
    }

    public function updateFpsInternet(Request $request)
    {
        $content = new Content;
        
        if(Auth::check())
        {
            
        }
    }
    
    public function updateFpsFastInternet(Request $request)
    {
        $content = new Content;
        
        if(Auth::check())
        {
            
        }
    }
    
    public function updateFpsUsers(Request $request)
    {
        $content = new Content;
        
        if(Auth::check())
        {
            
        }
    }
}
