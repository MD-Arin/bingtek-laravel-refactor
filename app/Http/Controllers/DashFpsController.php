<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Content;
use Illuminate\Support\Facades\Auth;
use Image;

class DashFpsController extends Controller {

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

    public function updateFpsInternet(Request $request) {
        $content = new Content;

        if (Auth::check()) {
            if ($request->hasFile("1-fpsInternet-img-1")) {
                $img = $request->file('1-fpsInternet-img-1');
                $filename = time() . '.' . $img->getClientOriginalExtension();
                $location = public_path('img/production/' . $filename);
                $dataLocation = 'img/production/' . $filename;
                Image::make($img)->save($location);

                $content->where([['pages_id', '=', '3'], ['section', '=', '3-2-1-img']])->update(['body' => $dataLocation]);
                if (Input::get('1-fpsInternet-h1-1') != null) {
                    $content->where([['pages_id', '=', '3'], ['section', '=', '3-2-2-h1']])->update(['body' => Input::get('1-fpsInternet-h1-1')]);
                    if (Input::get('1-fpsInternet-h2-1') != null) {
                        $content->where([['pages_id', '=', '3'], ['section', '=', '3-2-2-h2']])->update(['body' => Input::get('1-fpsInternet-h2-1')]);
                        if (Input::get('1-fpsInternet-p-1') != null) {
                            $content->where([['pages_id', '=', '3'], ['section', '=', '3-2-2-p-1']])->update(['body' => Input::get('1-fpsInternet-p-1')]);
                        }
                    }
                }
            } elseif (Input::get('1-fpsInternet-h1-1') != null) {
                $content->where([['pages_id', '=', '3'], ['section', '=', '3-2-2-h1']])->update(['body' => Input::get('1-fpsInternet-h1-1')]);
                if (Input::get('1-fpsInternet-h2-1') != null) {
                    $content->where([['pages_id', '=', '3'], ['section', '=', '3-2-2-h2']])->update(['body' => Input::get('1-fpsInternet-h2-1')]);
                    if (Input::get('1-fpsInternet-p-1') != null) {
                        $content->where([['pages_id', '=', '3'], ['section', '=', '3-2-2-p-1']])->update(['body' => Input::get('1-fpsInternet-p-1')]);
                    }
                }
            } elseif (Input::get('1-fpsInternet-h2-1') != null) {
                $content->where([['pages_id', '=', '3'], ['section', '=', '3-2-2-h2']])->update(['body' => Input::get('1-fpsInternet-h2-1')]);
                if (Input::get('1-fpsInternet-p-1') != null) {
                    $content->where([['pages_id', '=', '3'], ['section', '=', '3-2-2-p-1']])->update(['body' => Input::get('1-fpsInternet-p-1')]);
                }
            } elseif (Input::get('1-fpsInternet-p-1') != null) {
                $content->where([['pages_id', '=', '3'], ['section', '=', '3-2-2-p-1']])->update(['body' => Input::get('1-fpsInternet-p-1')]);
            }
            return redirect('dash-fps');
        }
    }

    public function updateFpsFastInternet(Request $request) {
        $content = new Content;

        if (Auth::check()) {
            if (Input::get('1-fastInternet-h1-1') != null) {
                $content->where([['pages_id', '=', '3'], ['section', '=', '3-3-1-h1']])->update(['body' => Input::get('1-fastInternet-h1-1')]);
                if (Input::get('1-fastInternet-h2-1') != null) {
                    $content->where([['pages_id', '=', '3'], ['section', '=', '3-3-1-h2']])->update(['body' => Input::get('1-fastInternet-h2-1')]);
                    if (Input::get('1-fastInternet-p') != null) {
                        $content->where([['pages_id', '=', '3'], ['section', '=', '3-3-1-p']])->update(['body' => Input::get('1-fastInternet-p')]);
                        if ($request->hasFile("1-fastInternet-img-1")) {
                            $img = $request->file('1-fastInternet-img-1');
                            $filename = time() . '.' . $img->getClientOriginalExtension();
                            $location = public_path('img/production/' . $filename);
                            $dataLocation = 'img/production/' . $filename;
                            Image::make($img)->save($location);

                            $content->where([['pages_id', '=', '3'], ['section', '=', '3-3-1-img']])->update(['body' => $dataLocation]);
                            if (Input::get('1-fastInternet-li-1')) {
                                $content->where([['pages_id', '=', '3'], ['section', '=', '3-3-2-li-1']])->update(['body' => Input::get('1-fastInternet-li-1')]);
                                if (Input::get('1-fastInternet-li-2') != null) {
                                    $content->where([['pages_id', '=', '3'], ['section', '=', '3-3-2-li-2']])->update(['body' => Input::get('1-fastInternet-li-2')]);
                                    if (Input::get('1-fastInternet-li-3') != null) {
                                        $content->where([['pages_id', '=', '3'], ['section', '=', '3-3-2-li-3']])->update(['body' => Input::get('1-fastInternet-li-3')]);
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif (Input::get('1-fastInternet-h2-1') != null) {
                $content->where([['pages_id', '=', '3'], ['section', '=', '3-3-1-h2']])->update(['body' => Input::get('1-fastInternet-h2-1')]);
                if (Input::get('1-fastInternet-p') != null) {
                    $content->where([['pages_id', '=', '3'], ['section', '=', '3-3-1-p']])->update(['body' => Input::get('1-fastInternet-p')]);
                    if ($request->hasFile("1-fastInternet-img-1")) {
                        $img = $request->file('1-fastInternet-img-1');
                        $filename = time() . '.' . $img->getClientOriginalExtension();
                        $location = public_path('img/production/' . $filename);
                        $dataLocation = 'img/production/' . $filename;
                        Image::make($img)->save($location);

                        $content->where([['pages_id', '=', '3'], ['section', '=', '3-3-1-img']])->update(['body' => $dataLocation]);
                        if (Input::get('1-fastInternet-li-1')) {
                            $content->where([['pages_id', '=', '3'], ['section', '=', '3-3-2-li-1']])->update(['body' => Input::get('1-fastInternet-li-1')]);
                            if (Input::get('1-fastInternet-li-2') != null) {
                                $content->where([['pages_id', '=', '3'], ['section', '=', '3-3-2-li-2']])->update(['body' => Input::get('1-fastInternet-li-2')]);
                                if (Input::get('1-fastInternet-li-3') != null) {
                                    $content->where([['pages_id', '=', '3'], ['section', '=', '3-3-2-li-3']])->update(['body' => Input::get('1-fastInternet-li-3')]);
                                }
                            }
                        }
                    }
                }
            } elseif (Input::get('1-fastInternet-p') != null) {
                $content->where([['pages_id', '=', '3'], ['section', '=', '3-3-1-p']])->update(['body' => Input::get('1-fastInternet-p')]);
                if ($request->hasFile("1-fastInternet-img-1")) {
                    $img = $request->file('1-fastInternet-img-1');
                    $filename = time() . '.' . $img->getClientOriginalExtension();
                    $location = public_path('img/production/' . $filename);
                    $dataLocation = 'img/production/' . $filename;
                    Image::make($img)->save($location);

                    $content->where([['pages_id', '=', '3'], ['section', '=', '3-3-1-img']])->update(['body' => $dataLocation]);
                    if (Input::get('1-fastInternet-li-1')) {
                        $content->where([['pages_id', '=', '3'], ['section', '=', '3-3-2-li-1']])->update(['body' => Input::get('1-fastInternet-li-1')]);
                        if (Input::get('1-fastInternet-li-2') != null) {
                            $content->where([['pages_id', '=', '3'], ['section', '=', '3-3-2-li-2']])->update(['body' => Input::get('1-fastInternet-li-2')]);
                            if (Input::get('1-fastInternet-li-3') != null) {
                                $content->where([['pages_id', '=', '3'], ['section', '=', '3-3-2-li-3']])->update(['body' => Input::get('1-fastInternet-li-3')]);
                            }
                        }
                    }
                }
            } elseif ($request->hasFile("1-fastInternet-img-1")) {
                $img = $request->file('1-fastInternet-img-1');
                $filename = time() . '.' . $img->getClientOriginalExtension();
                $location = public_path('img/production/' . $filename);
                $dataLocation = 'img/production/' . $filename;
                Image::make($img)->save($location);

                $content->where([['pages_id', '=', '3'], ['section', '=', '3-3-1-img']])->update(['body' => $dataLocation]);
                if (Input::get('1-fastInternet-li-1')) {
                    $content->where([['pages_id', '=', '3'], ['section', '=', '3-3-2-li-1']])->update(['body' => Input::get('1-fastInternet-li-1')]);
                    if (Input::get('1-fastInternet-li-2') != null) {
                        $content->where([['pages_id', '=', '3'], ['section', '=', '3-3-2-li-2']])->update(['body' => Input::get('1-fastInternet-li-2')]);
                        if (Input::get('1-fastInternet-li-3') != null) {
                            $content->where([['pages_id', '=', '3'], ['section', '=', '3-3-2-li-3']])->update(['body' => Input::get('1-fastInternet-li-3')]);
                        }
                    }
                }
            } elseif (Input::get('1-fastInternet-li-1')) {
                $content->where([['pages_id', '=', '3'], ['section', '=', '3-3-2-li-1']])->update(['body' => Input::get('1-fastInternet-li-1')]);
                if (Input::get('1-fastInternet-li-2') != null) {
                    $content->where([['pages_id', '=', '3'], ['section', '=', '3-3-2-li-2']])->update(['body' => Input::get('1-fastInternet-li-2')]);
                    if (Input::get('1-fastInternet-li-3') != null) {
                        $content->where([['pages_id', '=', '3'], ['section', '=', '3-3-2-li-3']])->update(['body' => Input::get('1-fastInternet-li-3')]);
                    }
                }
            } elseif (Input::get('1-fastInternet-li-2') != null) {
                $content->where([['pages_id', '=', '3'], ['section', '=', '3-3-2-li-2']])->update(['body' => Input::get('1-fastInternet-li-2')]);
                if (Input::get('1-fastInternet-li-3') != null) {
                    $content->where([['pages_id', '=', '3'], ['section', '=', '3-3-2-li-3']])->update(['body' => Input::get('1-fastInternet-li-3')]);
                }
            }
//            Returns a blank space
            elseif (Input::get('1-fastInternet-li-3') != null) {
                $content->where([['pages_id', '=', '3'], ['section', '=', '3-3-2-li-3']])->update(['body' => Input::get('1-fastInternet-li-3')]);
            }
            return redirect('dash-fps');
        }
    }

    public function updateFpsUsers(Request $request) {
        $content = new Content;

        if (Auth::check()) {
            if ($request->hasFile('1-fpsUsers-img-1')) {
                $img = $request->file('1-fpsUsers-img-1');
                $filename = time() . '.' . $img->getClientOriginalExtension();
                $location = public_path('img/production/' . $filename);
                $dataLocation = 'img/production/' . $filename;
                Image::make($img)->save($location);

                $content->where([['pages_id', '=', '3'], ['section', '=', '3-4-1-img']])->update(['body' => $dataLocation]);
                if (Input::get('1-fpsUsers-p-1') != null) {
                    $content->where([['pages_id', '=', '3'], ['section', '=', '3-4-1-p']])->update(['body' => Input::get('1-fpsUsers-p-1')]);
                    if ($request->hasFile('1-fpsUsers-img-2')) {
                        $img = $request->file('1-fpsUsers-img-2');
                        $filename = time() . '.' . $img->getClientOriginalExtension();
                        $location = public_path('img/production/' . $filename);
                        $dataLocation = 'img/production/' . $filename;
                        Image::make($img)->save($location);

                        $content->where([['pages_id', '=', '3'], ['section', '=', '3-4-2-img']])->update(['body' => $dataLocation]);
                        if (Input::get('1-fpsUsers-p-2') != null) {
                            $content->where([['pages_id', '=', '3'], ['section', '=', '3-4-2-p']])->update(['body' => Input::get('1-fpsUsers-p-2')]);
                            if ($request->hasFile('1-fpsUsers-img-3')) {
                                $img = $request->file('1-fpsUsers-img-3');
                                $filename = time() . '.' . $img->getClientOriginalExtension();
                                $location = public_path('img/production/' . $filename);
                                $dataLocation = 'img/production/' . $filename;
                                Image::make($img)->save($location);

                                $content->where([['pages_id', '=', '3'], ['section', '=', '3-4-3-img']])->update(['body' => $dataLocation]);
                                if (Input::get('1-fpsUsers-p-3') != null) {
                                    $content->where([['pages_id', '=', '3'], ['section', '=', '3-4-3-p']])->update(['body' => Input::get('1-fpsUsers-p-3')]);
                                }
                            }
                        }
                    }
                }
            } elseif (Input::get('1-fpsUsers-p-1') != null) {
                $content->where([['pages_id', '=', '3'], ['section', '=', '3-4-1-p']])->update(['body' => Input::get('1-fpsUsers-p-1')]);
                if ($request->hasFile('1-fpsUsers-img-2')) {
                    $img = $request->file('1-fpsUsers-img-2');
                    $filename = time() . '.' . $img->getClientOriginalExtension();
                    $location = public_path('img/production/' . $filename);
                    $dataLocation = 'img/production/' . $filename;
                    Image::make($img)->save($location);

                    $content->where([['pages_id', '=', '3'], ['section', '=', '3-4-2-img']])->update(['body' => $dataLocation]);
                    if (Input::get('1-fpsUsers-p-2') != null) {
                        $content->where([['pages_id', '=', '3'], ['section', '=', '3-4-2-p']])->update(['body' => Input::get('1-fpsUsers-p-2')]);
                        if ($request->hasFile('1-fpsUsers-img-3')) {
                            $img = $request->file('1-fpsUsers-img-3');
                            $filename = time() . '.' . $img->getClientOriginalExtension();
                            $location = public_path('img/production/' . $filename);
                            $dataLocation = 'img/production/' . $filename;
                            Image::make($img)->save($location);

                            $content->where([['pages_id', '=', '3'], ['section', '=', '3-4-3-img']])->update(['body' => $dataLocation]);
                            if (Input::get('1-fpsUsers-p-3') != null) {
                                $content->where([['pages_id', '=', '3'], ['section', '=', '3-4-3-p']])->update(['body' => Input::get('1-fpsUsers-p-3')]);
                            }
                        }
                    }
                }
            } elseif ($request->hasFile('1-fpsUsers-img-2')) {
                $img = $request->file('1-fpsUsers-img-2');
                $filename = time() . '.' . $img->getClientOriginalExtension();
                $location = public_path('img/production/' . $filename);
                $dataLocation = 'img/production/' . $filename;
                Image::make($img)->save($location);

                $content->where([['pages_id', '=', '3'], ['section', '=', '3-4-2-img']])->update(['body' => $dataLocation]);
                if (Input::get('1-fpsUsers-p-2') != null) {
                    $content->where([['pages_id', '=', '3'], ['section', '=', '3-4-2-p']])->update(['body' => Input::get('1-fpsUsers-p-2')]);
                    if ($request->hasFile('1-fpsUsers-img-3')) {
                        $img = $request->file('1-fpsUsers-img-3');
                        $filename = time() . '.' . $img->getClientOriginalExtension();
                        $location = public_path('img/production/' . $filename);
                        $dataLocation = 'img/production/' . $filename;
                        Image::make($img)->save($location);

                        $content->where([['pages_id', '=', '3'], ['section', '=', '3-4-3-img']])->update(['body' => $dataLocation]);
                        if (Input::get('1-fpsUsers-p-3') != null) {
                            $content->where([['pages_id', '=', '3'], ['section', '=', '3-4-3-p']])->update(['body' => Input::get('1-fpsUsers-p-3')]);
                        }
                    }
                }
            } elseif (Input::get('1-fpsUsers-p-2') != null) {
                $content->where([['pages_id', '=', '3'], ['section', '=', '3-4-2-p']])->update(['body' => Input::get('1-fpsUsers-p-2')]);
                if ($request->hasFile('1-fpsUsers-img-3')) {
                    $img = $request->file('1-fpsUsers-img-3');
                    $filename = time() . '.' . $img->getClientOriginalExtension();
                    $location = public_path('img/production/' . $filename);
                    $dataLocation = 'img/production/' . $filename;
                    Image::make($img)->save($location);

                    $content->where([['pages_id', '=', '3'], ['section', '=', '3-4-3-img']])->update(['body' => $dataLocation]);
                    if (Input::get('1-fpsUsers-p-3') != null) {
                        $content->where([['pages_id', '=', '3'], ['section', '=', '3-4-3-p']])->update(['body' => Input::get('1-fpsUsers-p-3')]);
                    }
                }
            } elseif ($request->hasFile('1-fpsUsers-img-3')) {
                $img = $request->file('1-fpsUsers-img-3');
                $filename = time() . '.' . $img->getClientOriginalExtension();
                $location = public_path('img/production/' . $filename);
                $dataLocation = 'img/production/' . $filename;
                Image::make($img)->save($location);

                $content->where([['pages_id', '=', '3'], ['section', '=', '3-4-3-img']])->update(['body' => $dataLocation]);
                if (Input::get('1-fpsUsers-p-3') != null) {
                    $content->where([['pages_id', '=', '3'], ['section', '=', '3-4-3-p']])->update(['body' => Input::get('1-fpsUsers-p-3')]);
                }
            } elseif (Input::get('1-fpsUsers-p-3') != null) {
                $content->where([['pages_id', '=', '3'], ['section', '=', '3-4-3-p']])->update(['body' => Input::get('1-fpsUsers-p-3')]);
            }
            return redirect('dash-fps');
        }
    }

}
