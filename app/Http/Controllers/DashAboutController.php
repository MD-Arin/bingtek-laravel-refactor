<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Content;
use Illuminate\Support\Facades\Auth;
use Image;

class DashAboutController extends Controller
{
    public function updateAboutHistory(Request $request)
    {
        if(Auth::check())
        {
            $content = new Content;
            
            if(Input::get('1-history-h1') != null)
            {
                $content->where([['pages_id','=','2'],['section','=','2-1-1-h1']])->update(['body' => Input::get('1-history-h1')]);
                if($request->hasFile('1-history-img-1'))
                {
                    $img = $request->file('cover-image');
                    $filename = time() . '.' . $img->getClientOriginalExtension();
                    $location = public_path('img/production/' . $filename);
                    $dataLocation = 'img/production/' . $filename;
                    Image::make($img)->save($location);
                    
                    $content->where([['pages_id','=','2'],['section','=','2-1-1-img']])->update(['body' => $dataLocation]);
                    if(Input::get('1-history-h4-1') != null)
                    {
                        $content->where([['pages_id','=','2'],['section','=','2-1-2-h1']])->update(['body' => Input::get('1-history-h4-1')]);
                        if(Input::get('1-history-h4-2') != null)
                        {
                            $content->where([['pages_id','=','2'],['section','=','2-1-2-h2']])->update(['body' => Input::get('1-history-h4-2')]);
                            if(Input::get('1-history-h4-3') != null)
                            {
                                $content->where([['pages_id','=','2'],['section','=','2-1-2-h3']])->update(['body' => Input::get('1-history-h4-3')]);
                                if(Input::get('1-history-p') != null)
                                {
                                    $content->where([['pages_id','=','2'],['section','=','2-1-2-p']])->update(['body' => Input::get('1-history-p')]);
                                }
                            }
                        }
                    }
                }
            }
            elseif ($request->hasFile('1-history-img-1')) {
                $img = $request->file('cover-image');
                $filename = time() . '.' . $img->getClientOriginalExtension();
                $location = public_path('img/production/' . $filename);
                $dataLocation = 'img/production/' . $filename;
                Image::make($img)->save($location);

                $content->where([['pages_id', '=', '2'], ['section', '=', '2-1-1-img']])->update(['body' => $dataLocation]);
                if (Input::get('1-history-h4-1') != null) {
                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-1-2-h1']])->update(['body' => Input::get('1-history-h4-1')]);
                    if (Input::get('1-history-h4-2') != null) {
                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-1-2-h2']])->update(['body' => Input::get('1-history-h4-2')]);
                        if (Input::get('1-history-h4-3') != null) {
                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-1-2-h3']])->update(['body' => Input::get('1-history-h4-3')]);
                            if (Input::get('1-history-p') != null) {
                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-1-2-p']])->update(['body' => Input::get('1-history-p')]);
                            }
                        }
                    }
                }
            } elseif (Input::get('1-history-h4-1') != null) {
                $content->where([['pages_id', '=', '2'], ['section', '=', '2-1-2-h1']])->update(['body' => Input::get('1-history-h4-1')]);
                if (Input::get('1-history-h4-2') != null) {
                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-1-2-h2']])->update(['body' => Input::get('1-history-h4-2')]);
                    if (Input::get('1-history-h4-3') != null) {
                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-1-2-h3']])->update(['body' => Input::get('1-history-h4-3')]);
                        if (Input::get('1-history-p') != null) {
                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-1-2-p']])->update(['body' => Input::get('1-history-p')]);
                        }
                    }
                }
            } elseif (Input::get('1-history-h4-2') != null) {
                $content->where([['pages_id', '=', '2'], ['section', '=', '2-1-2-h2']])->update(['body' => Input::get('1-history-h4-2')]);
                if (Input::get('1-history-h4-3') != null) {
                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-1-2-h3']])->update(['body' => Input::get('1-history-h4-3')]);
                    if (Input::get('1-history-p') != null) {
                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-1-2-p']])->update(['body' => Input::get('1-history-p')]);
                    }
                }
            } elseif (Input::get('1-history-h4-3') != null) {
                $content->where([['pages_id', '=', '2'], ['section', '=', '2-1-2-h3']])->update(['body' => Input::get('1-history-h4-3')]);
                if (Input::get('1-history-p') != null) {
                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-1-2-p']])->update(['body' => Input::get('1-history-p')]);
                }
            } elseif (Input::get('1-history-p') != null) {
                $content->where([['pages_id', '=', '2'], ['section', '=', '2-1-2-p']])->update(['body' => Input::get('1-history-p')]);
            }
            
            return redirect('/dash-about');
        }
    }
    
    public function updateAboutMilestones(Request $request)
    {
        if(Auth::check())
        {
            $content = new Content;
            
            if (Input::get('1-milestone-h1-1') != null) {
                $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-h1']])->update(['body' => Input::get('1-milestone-h1-1')]);
                if ($request->hasFile('1-milestone-img-1')) {
                    $img = $request->file('1-milestone-img-1');
                    $filename = time() . '.' . $img->getClientOriginalExtension();
                    $location = public_path('img/production/' . $filename);
                    $dataLocation = 'img/production/' . $filename;
                    Image::make($img)->save($location);

                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-img-1']])->update(['body' => $dataLocation]);
                    if (Input::get('1-milestone-year-1') != null) {
                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-img-1-h1']])->update(['body' => Input::get('1-milestone-year-1')]);
                        if (Input::get('1-milestone-accomplishment-1') != null) {
                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-img-1-h2']])->update(['body' => Input::get('1-milestone-accomplishment-1')]);
                            if (Input::get('1-milestone-body-1') != null) {
                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-img-1-p']])->update(['body' => Input::get('1-milestone-body-1')]);
                                if ($request->hasFile('1-milestone-img-2')) {
                                    $img = $request->file('1-milestone-img-2');
                                    $filename = time() . '.' . $img->getClientOriginalExtension();
                                    $location = public_path('img/production/' . $filename);
                                    $dataLocation = 'img/production/' . $filename;
                                    Image::make($img)->save($location);

                                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-img-2']])->update(['body' => $dataLocation]);
                                    if (Input::get('1-milestone-year-2') != null) {
                                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-img-2-h1']])->update(['body' => Input::get('1-milestone-year-2')]);
                                        if (Input::get('1-milestone-accomplishment-2') != null) {
                                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-img-2-h2']])->update(['body' => Input::get('1-milestone-accomplishment-2')]);
                                            if (Input::get('1-milestone-body-2') != null) {
                                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-img-2-P']])->update(['body' => Input::get('1-milestone-body-2')]);
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif ($request->hasFile('1-milestone-img-1')) {
                $img = $request->file('1-milestone-img-1');
                $filename = time() . '.' . $img->getClientOriginalExtension();
                $location = public_path('img/production/' . $filename);
                $dataLocation = 'img/production/' . $filename;
                Image::make($img)->save($location);

                $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-img-1']])->update(['body' => $dataLocation]);
                if (Input::get('1-milestone-year-1') != null) {
                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-img-1-h1']])->update(['body' => Input::get('1-milestone-year-1')]);
                    if (Input::get('1-milestone-accomplishment-1') != null) {
                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-img-1-h2']])->update(['body' => Input::get('1-milestone-accomplishment-1')]);
                        if (Input::get('1-milestone-body-1') != null) {
                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-img-1-p']])->update(['body' => Input::get('1-milestone-body-1')]);
                            if ($request->hasFile('1-milestone-img-2')) {
                                $img = $request->file('1-milestone-img-2');
                                $filename = time() . '.' . $img->getClientOriginalExtension();
                                $location = public_path('img/production/' . $filename);
                                $dataLocation = 'img/production/' . $filename;
                                Image::make($img)->save($location);

                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-img-2']])->update(['body' => $dataLocation]);
                                if (Input::get('1-milestone-year-2') != null) {
                                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-img-2-h1']])->update(['body' => Input::get('1-milestone-year-2')]);
                                    if (Input::get('1-milestone-accomplishment-2') != null) {
                                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-img-2-h2']])->update(['body' => Input::get('1-milestone-accomplishment-2')]);
                                        if (Input::get('1-milestone-body-2') != null) {
                                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-img-2-P']])->update(['body' => Input::get('1-milestone-body-2')]);
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif (Input::get('1-milestone-year-1') != null) {
                $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-img-1-h1']])->update(['body' => Input::get('1-milestone-year-1')]);
                if (Input::get('1-milestone-accomplishment-1') != null) {
                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-img-1-h2']])->update(['body' => Input::get('1-milestone-accomplishment-1')]);
                    if (Input::get('1-milestone-body-1') != null) {
                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-img-1-p']])->update(['body' => Input::get('1-milestone-body-1')]);
                        if ($request->hasFile('1-milestone-img-2')) {
                            $img = $request->file('1-milestone-img-2');
                            $filename = time() . '.' . $img->getClientOriginalExtension();
                            $location = public_path('img/production/' . $filename);
                            $dataLocation = 'img/production/' . $filename;
                            Image::make($img)->save($location);

                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-img-2']])->update(['body' => $dataLocation]);
                            if (Input::get('1-milestone-year-2') != null) {
                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-img-2-h1']])->update(['body' => Input::get('1-milestone-year-2')]);
                                if (Input::get('1-milestone-accomplishment-2') != null) {
                                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-img-2-h2']])->update(['body' => Input::get('1-milestone-accomplishment-2')]);
                                    if (Input::get('1-milestone-body-2') != null) {
                                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-img-2-P']])->update(['body' => Input::get('1-milestone-body-2')]);
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif (Input::get('1-milestone-accomplishment-1') != null) {
                $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-img-1-h2']])->update(['body' => Input::get('1-milestone-accomplishment-1')]);
                if (Input::get('1-milestone-body-1') != null) {
                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-img-1-p']])->update(['body' => Input::get('1-milestone-body-1')]);
                    if ($request->hasFile('1-milestone-img-2')) {
                        $img = $request->file('1-milestone-img-2');
                        $filename = time() . '.' . $img->getClientOriginalExtension();
                        $location = public_path('img/production/' . $filename);
                        $dataLocation = 'img/production/' . $filename;
                        Image::make($img)->save($location);

                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-img-2']])->update(['body' => $dataLocation]);
                        if (Input::get('1-milestone-year-2') != null) {
                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-img-2-h1']])->update(['body' => Input::get('1-milestone-year-2')]);
                            if (Input::get('1-milestone-accomplishment-2') != null) {
                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-img-2-h2']])->update(['body' => Input::get('1-milestone-accomplishment-2')]);
                                if (Input::get('1-milestone-body-2') != null) {
                                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-img-2-P']])->update(['body' => Input::get('1-milestone-body-2')]);
                                }
                            }
                        }
                    }
                }
            } elseif (Input::get('1-milestone-body-1') != null) {
                $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-img-1-p']])->update(['body' => Input::get('1-milestone-body-1')]);
                if ($request->hasFile('1-milestone-img-2')) {
                    $img = $request->file('1-milestone-img-2');
                    $filename = time() . '.' . $img->getClientOriginalExtension();
                    $location = public_path('img/production/' . $filename);
                    $dataLocation = 'img/production/' . $filename;
                    Image::make($img)->save($location);

                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-img-2']])->update(['body' => $dataLocation]);
                    if (Input::get('1-milestone-year-2') != null) {
                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-img-2-h1']])->update(['body' => Input::get('1-milestone-year-2')]);
                        if (Input::get('1-milestone-accomplishment-2') != null) {
                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-img-2-h2']])->update(['body' => Input::get('1-milestone-accomplishment-2')]);
                            if (Input::get('1-milestone-body-2') != null) {
                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-img-2-P']])->update(['body' => Input::get('1-milestone-body-2')]);
                            }
                        }
                    }
                }
            } elseif ($request->hasFile('1-milestone-img-2')) {
                $img = $request->file('1-milestone-img-2');
                $filename = time() . '.' . $img->getClientOriginalExtension();
                $location = public_path('img/production/' . $filename);
                $dataLocation = 'img/production/' . $filename;
                Image::make($img)->save($location);

                $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-img-2']])->update(['body' => $dataLocation]);
                if (Input::get('1-milestone-year-2') != null) {
                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-img-2-h1']])->update(['body' => Input::get('1-milestone-year-2')]);
                    if (Input::get('1-milestone-accomplishment-2') != null) {
                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-img-2-h2']])->update(['body' => Input::get('1-milestone-accomplishment-2')]);
                        if (Input::get('1-milestone-body-2') != null) {
                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-img-2-P']])->update(['body' => Input::get('1-milestone-body-2')]);
                        }
                    }
                }
            } elseif (Input::get('1-milestone-year-2') != null) {
                $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-img-2-h1']])->update(['body' => Input::get('1-milestone-year-2')]);
                if (Input::get('1-milestone-accomplishment-2') != null) {
                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-img-2-h2']])->update(['body' => Input::get('1-milestone-accomplishment-2')]);
                    if (Input::get('1-milestone-body-2') != null) {
                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-img-2-P']])->update(['body' => Input::get('1-milestone-body-2')]);
                    }
                }
            } elseif (Input::get('1-milestone-accomplishment-2') != null) {
                $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-img-2-h2']])->update(['body' => Input::get('1-milestone-accomplishment-2')]);
                if (Input::get('1-milestone-body-2') != null) {
                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-img-2-P']])->update(['body' => Input::get('1-milestone-body-2')]);
                }
            } elseif (Input::get('1-milestone-body-2') != null) {
                $content->where([['pages_id', '=', '2'], ['section', '=', '2-2-1-img-2-P']])->update(['body' => Input::get('1-milestone-body-2')]);
            }

            return redirect('/dash-about');
        }
    }
    
    public function updateAboutTestimonials(Request $request) {
        if (Auth::check()) {
            $content = new Content;

            if ($request->hasFile('1-testimonials-img-1')) {
                $img = $request->file('1-testimonials-img-2');
                $filename = time() . '.' . $img->getClientOriginalExtension();
                $location = public_path('img/production/' . $filename);
                $dataLocation = 'img/production/' . $filename;
                Image::make($img)->save($location);

                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-1-img']])->update(['body' => $dataLocation]);
                if (Input::get('1-testimonials-message-1') != null) {
                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-1-p']])->update(['body' => Input::get('1-testimonials-message-1')]);
                    if (Input::get('1-testimonials-name-1') != null) {
                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-1-h5-1']])->update(['body' => Input::get('1-testimonials-name-1')]);
                        if (Input::get('1-testimonials-position-1') != null) {
                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-1-h5-2']])->update(['body' => Input::get('1-testimonials-position-1')]);
                            if (Input::get('1-testimonials-company-1') != null) {
                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-1-h5-3']])->update(['body' => Input::get('1-testimonials-company-1')]);
                                if ($request->hasFile('1-testimonials-img-2')) {
                                    $img = $request->file('1-testimonials-img-2');
                                    $filename = time() . '.' . $img->getClientOriginalExtension();
                                    $location = public_path('img/production/' . $filename);
                                    $dataLocation = 'img/production/' . $filename;
                                    Image::make($img)->save($location);

                                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-2-img']])->update(['body' => $dataLocation]);
                                    if (Input::get('1-testimonials-message-2') != null) {
                                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-2-p']])->update(['body' => Input::get('1-testimonials-message-2')]);
                                        if (Input::get('1-testimonials-name-2') != null) {
                                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-2-h5-1']])->update(['body' => Input::get('1-testimonials-name-2')]);
                                            if (Input::get('1-testimonials-position-2') != null) {
                                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-2-h5-2']])->update(['body' => Input::get('1-testimonials-position-2')]);
                                                if (Input::get('1-testimonials-company-2') != null) {
                                                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-2-h5-3']])->update(['body' => Input::get('1-testimonials-company-2')]);
                                                    if ($request->hasFile('1-testimonials-img-3')) {
                                                        $img = $request->file('1-testimonials-img-3');
                                                        $filename = time() . '.' . $img->getClientOriginalExtension();
                                                        $location = public_path('img/production/' . $filename);
                                                        $dataLocation = 'img/production/' . $filename;
                                                        Image::make($img)->save($location);

                                                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-img']])->update(['body' => $dataLocation]);
                                                        if (Input::get('1-testimonials-message-3') != null) {
                                                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-p']])->update(['body' => Input::get('1-testimonials-message-3')]);
                                                            if (Input::get('1-testimonials-name-3') != null) {
                                                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-h5-1']])->update(['body' => Input::get('1-testimonials-name-3')]);
                                                                if (Input::get('1-testimonials-position-3') != null) {
                                                                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-h5-2']])->update(['body' => Input::get('1-testimonials-position-3')]);
                                                                    if (Input::get('1-testimonials-company-3') != null) {
                                                                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-h5-3']])->update(['body' => Input::get('1-testimonials-company-3')]);
                                                                        if ($request->hasFile('1-testimonials-img-4')) {
                                                                            $img = $request->file('1-testimonials-img-4');
                                                                            $filename = time() . '.' . $img->getClientOriginalExtension();
                                                                            $location = public_path('img/production/' . $filename);
                                                                            $dataLocation = 'img/production/' . $filename;
                                                                            Image::make($img)->save($location);

                                                                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-img']])->update(['body' => $dataLocation]);
                                                                            if (Input::get('1-testimonials-message-4') != null) {
                                                                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-p']])->update(['body' => Input::get('1-testimonials-message-4')]);
                                                                                if (Input::get('1-testimonials-name-4') != null) {
                                                                                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-1']])->update(['body' => Input::get('1-testimonials-name-4')]);
                                                                                    if (Input::get('1-testimonials-position-4') != null) {
                                                                                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-2']])->update(['body' => Input::get('1-testimonials-position-4')]);
                                                                                        if (Input::get('1-testimonials-company-4') != null) {
                                                                                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-3']])->update(['body' => Input::get('1-testimonials-company-4')]);
                                                                                        }
                                                                                    }
                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif (Input::get('1-testimonials-message-1') != null) {
                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-1-p']])->update(['body' => Input::get('1-testimonials-message-1')]);
                if (Input::get('1-testimonials-name-1') != null) {
                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-1-h5-1']])->update(['body' => Input::get('1-testimonials-name-1')]);
                    if (Input::get('1-testimonials-position-1') != null) {
                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-1-h5-2']])->update(['body' => Input::get('1-testimonials-position-1')]);
                        if (Input::get('1-testimonials-company-1') != null) {
                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-1-h5-3']])->update(['body' => Input::get('1-testimonials-company-1')]);
                            if ($request->hasFile('1-testimonials-img-2')) {
                                $img = $request->file('1-testimonials-img-2');
                                $filename = time() . '.' . $img->getClientOriginalExtension();
                                $location = public_path('img/production/' . $filename);
                                $dataLocation = 'img/production/' . $filename;
                                Image::make($img)->save($location);

                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-2-img']])->update(['body' => $dataLocation]);
                                if (Input::get('1-testimonials-message-2') != null) {
                                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-2-p']])->update(['body' => Input::get('1-testimonials-message-2')]);
                                    if (Input::get('1-testimonials-name-2') != null) {
                                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-2-h5-1']])->update(['body' => Input::get('1-testimonials-name-2')]);
                                        if (Input::get('1-testimonials-position-2') != null) {
                                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-2-h5-2']])->update(['body' => Input::get('1-testimonials-position-2')]);
                                            if (Input::get('1-testimonials-company-2') != null) {
                                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-2-h5-3']])->update(['body' => Input::get('1-testimonials-company-2')]);
                                                if ($request->hasFile('1-testimonials-img-3')) {
                                                    $img = $request->file('1-testimonials-img-3');
                                                    $filename = time() . '.' . $img->getClientOriginalExtension();
                                                    $location = public_path('img/production/' . $filename);
                                                    $dataLocation = 'img/production/' . $filename;
                                                    Image::make($img)->save($location);

                                                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-img']])->update(['body' => $dataLocation]);
                                                    if (Input::get('1-testimonials-message-3') != null) {
                                                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-p']])->update(['body' => Input::get('1-testimonials-message-3')]);
                                                        if (Input::get('1-testimonials-name-3') != null) {
                                                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-h5-1']])->update(['body' => Input::get('1-testimonials-name-3')]);
                                                            if (Input::get('1-testimonials-position-3') != null) {
                                                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-h5-2']])->update(['body' => Input::get('1-testimonials-position-3')]);
                                                                if (Input::get('1-testimonials-company-3') != null) {
                                                                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-h5-3']])->update(['body' => Input::get('1-testimonials-company-3')]);
                                                                    if ($request->hasFile('1-testimonials-img-4')) {
                                                                        $img = $request->file('1-testimonials-img-4');
                                                                        $filename = time() . '.' . $img->getClientOriginalExtension();
                                                                        $location = public_path('img/production/' . $filename);
                                                                        $dataLocation = 'img/production/' . $filename;
                                                                        Image::make($img)->save($location);

                                                                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-img']])->update(['body' => $dataLocation]);
                                                                        if (Input::get('1-testimonials-message-4') != null) {
                                                                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-p']])->update(['body' => Input::get('1-testimonials-message-4')]);
                                                                            if (Input::get('1-testimonials-name-4') != null) {
                                                                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-1']])->update(['body' => Input::get('1-testimonials-name-4')]);
                                                                                if (Input::get('1-testimonials-position-4') != null) {
                                                                                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-2']])->update(['body' => Input::get('1-testimonials-position-4')]);
                                                                                    if (Input::get('1-testimonials-company-4') != null) {
                                                                                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-3']])->update(['body' => Input::get('1-testimonials-company-4')]);
                                                                                    }
                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif (Input::get('1-testimonials-name-1') != null) {
                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-1-h5-1']])->update(['body' => Input::get('1-testimonials-name-1')]);
                if (Input::get('1-testimonials-position-1') != null) {
                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-1-h5-2']])->update(['body' => Input::get('1-testimonials-position-1')]);
                    if (Input::get('1-testimonials-company-1') != null) {
                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-1-h5-3']])->update(['body' => Input::get('1-testimonials-company-1')]);
                        if ($request->hasFile('1-testimonials-img-2')) {
                            $img = $request->file('1-testimonials-img-2');
                            $filename = time() . '.' . $img->getClientOriginalExtension();
                            $location = public_path('img/production/' . $filename);
                            $dataLocation = 'img/production/' . $filename;
                            Image::make($img)->save($location);

                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-2-img']])->update(['body' => $dataLocation]);
                            if (Input::get('1-testimonials-message-2') != null) {
                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-2-p']])->update(['body' => Input::get('1-testimonials-message-2')]);
                                if (Input::get('1-testimonials-name-2') != null) {
                                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-2-h5-1']])->update(['body' => Input::get('1-testimonials-name-2')]);
                                    if (Input::get('1-testimonials-position-2') != null) {
                                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-2-h5-2']])->update(['body' => Input::get('1-testimonials-position-2')]);
                                        if (Input::get('1-testimonials-company-2') != null) {
                                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-2-h5-3']])->update(['body' => Input::get('1-testimonials-company-2')]);
                                            if ($request->hasFile('1-testimonials-img-3')) {
                                                $img = $request->file('1-testimonials-img-3');
                                                $filename = time() . '.' . $img->getClientOriginalExtension();
                                                $location = public_path('img/production/' . $filename);
                                                $dataLocation = 'img/production/' . $filename;
                                                Image::make($img)->save($location);

                                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-img']])->update(['body' => $dataLocation]);
                                                if (Input::get('1-testimonials-message-3') != null) {
                                                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-p']])->update(['body' => Input::get('1-testimonials-message-3')]);
                                                    if (Input::get('1-testimonials-name-3') != null) {
                                                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-h5-1']])->update(['body' => Input::get('1-testimonials-name-3')]);
                                                        if (Input::get('1-testimonials-position-3') != null) {
                                                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-h5-2']])->update(['body' => Input::get('1-testimonials-position-3')]);
                                                            if (Input::get('1-testimonials-company-3') != null) {
                                                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-h5-3']])->update(['body' => Input::get('1-testimonials-company-3')]);
                                                                if ($request->hasFile('1-testimonials-img-4')) {
                                                                    $img = $request->file('1-testimonials-img-4');
                                                                    $filename = time() . '.' . $img->getClientOriginalExtension();
                                                                    $location = public_path('img/production/' . $filename);
                                                                    $dataLocation = 'img/production/' . $filename;
                                                                    Image::make($img)->save($location);

                                                                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-img']])->update(['body' => $dataLocation]);
                                                                    if (Input::get('1-testimonials-message-4') != null) {
                                                                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-p']])->update(['body' => Input::get('1-testimonials-message-4')]);
                                                                        if (Input::get('1-testimonials-name-4') != null) {
                                                                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-1']])->update(['body' => Input::get('1-testimonials-name-4')]);
                                                                            if (Input::get('1-testimonials-position-4') != null) {
                                                                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-2']])->update(['body' => Input::get('1-testimonials-position-4')]);
                                                                                if (Input::get('1-testimonials-company-4') != null) {
                                                                                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-3']])->update(['body' => Input::get('1-testimonials-company-4')]);
                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif (Input::get('1-testimonials-position-1') != null) {
                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-1-h5-2']])->update(['body' => Input::get('1-testimonials-position-1')]);
                if (Input::get('1-testimonials-company-1') != null) {
                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-1-h5-3']])->update(['body' => Input::get('1-testimonials-company-1')]);
                    if ($request->hasFile('1-testimonials-img-2')) {
                        $img = $request->file('1-testimonials-img-2');
                        $filename = time() . '.' . $img->getClientOriginalExtension();
                        $location = public_path('img/production/' . $filename);
                        $dataLocation = 'img/production/' . $filename;
                        Image::make($img)->save($location);

                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-2-img']])->update(['body' => $dataLocation]);
                        if (Input::get('1-testimonials-message-2') != null) {
                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-2-p']])->update(['body' => Input::get('1-testimonials-message-2')]);
                            if (Input::get('1-testimonials-name-2') != null) {
                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-2-h5-1']])->update(['body' => Input::get('1-testimonials-name-2')]);
                                if (Input::get('1-testimonials-position-2') != null) {
                                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-2-h5-2']])->update(['body' => Input::get('1-testimonials-position-2')]);
                                    if (Input::get('1-testimonials-company-2') != null) {
                                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-2-h5-3']])->update(['body' => Input::get('1-testimonials-company-2')]);
                                        if ($request->hasFile('1-testimonials-img-3')) {
                                            $img = $request->file('1-testimonials-img-3');
                                            $filename = time() . '.' . $img->getClientOriginalExtension();
                                            $location = public_path('img/production/' . $filename);
                                            $dataLocation = 'img/production/' . $filename;
                                            Image::make($img)->save($location);

                                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-img']])->update(['body' => $dataLocation]);
                                            if (Input::get('1-testimonials-message-3') != null) {
                                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-p']])->update(['body' => Input::get('1-testimonials-message-3')]);
                                                if (Input::get('1-testimonials-name-3') != null) {
                                                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-h5-1']])->update(['body' => Input::get('1-testimonials-name-3')]);
                                                    if (Input::get('1-testimonials-position-3') != null) {
                                                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-h5-2']])->update(['body' => Input::get('1-testimonials-position-3')]);
                                                        if (Input::get('1-testimonials-company-3') != null) {
                                                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-h5-3']])->update(['body' => Input::get('1-testimonials-company-3')]);
                                                            if ($request->hasFile('1-testimonials-img-4')) {
                                                                $img = $request->file('1-testimonials-img-4');
                                                                $filename = time() . '.' . $img->getClientOriginalExtension();
                                                                $location = public_path('img/production/' . $filename);
                                                                $dataLocation = 'img/production/' . $filename;
                                                                Image::make($img)->save($location);

                                                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-img']])->update(['body' => $dataLocation]);
                                                                if (Input::get('1-testimonials-message-4') != null) {
                                                                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-p']])->update(['body' => Input::get('1-testimonials-message-4')]);
                                                                    if (Input::get('1-testimonials-name-4') != null) {
                                                                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-1']])->update(['body' => Input::get('1-testimonials-name-4')]);
                                                                        if (Input::get('1-testimonials-position-4') != null) {
                                                                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-2']])->update(['body' => Input::get('1-testimonials-position-4')]);
                                                                            if (Input::get('1-testimonials-company-4') != null) {
                                                                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-3']])->update(['body' => Input::get('1-testimonials-company-4')]);
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif (Input::get('1-testimonials-company-1') != null) {
                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-1-h5-3']])->update(['body' => Input::get('1-testimonials-company-1')]);
                if ($request->hasFile('1-testimonials-img-2')) {
                    $img = $request->file('1-testimonials-img-2');
                    $filename = time() . '.' . $img->getClientOriginalExtension();
                    $location = public_path('img/production/' . $filename);
                    $dataLocation = 'img/production/' . $filename;
                    Image::make($img)->save($location);

                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-2-img']])->update(['body' => $dataLocation]);
                    if (Input::get('1-testimonials-message-2') != null) {
                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-2-p']])->update(['body' => Input::get('1-testimonials-message-2')]);
                        if (Input::get('1-testimonials-name-2') != null) {
                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-2-h5-1']])->update(['body' => Input::get('1-testimonials-name-2')]);
                            if (Input::get('1-testimonials-position-2') != null) {
                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-2-h5-2']])->update(['body' => Input::get('1-testimonials-position-2')]);
                                if (Input::get('1-testimonials-company-2') != null) {
                                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-2-h5-3']])->update(['body' => Input::get('1-testimonials-company-2')]);
                                    if ($request->hasFile('1-testimonials-img-3')) {
                                        $img = $request->file('1-testimonials-img-3');
                                        $filename = time() . '.' . $img->getClientOriginalExtension();
                                        $location = public_path('img/production/' . $filename);
                                        $dataLocation = 'img/production/' . $filename;
                                        Image::make($img)->save($location);

                                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-img']])->update(['body' => $dataLocation]);
                                        if (Input::get('1-testimonials-message-3') != null) {
                                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-p']])->update(['body' => Input::get('1-testimonials-message-3')]);
                                            if (Input::get('1-testimonials-name-3') != null) {
                                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-h5-1']])->update(['body' => Input::get('1-testimonials-name-3')]);
                                                if (Input::get('1-testimonials-position-3') != null) {
                                                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-h5-2']])->update(['body' => Input::get('1-testimonials-position-3')]);
                                                    if (Input::get('1-testimonials-company-3') != null) {
                                                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-h5-3']])->update(['body' => Input::get('1-testimonials-company-3')]);
                                                        if ($request->hasFile('1-testimonials-img-4')) {
                                                            $img = $request->file('1-testimonials-img-4');
                                                            $filename = time() . '.' . $img->getClientOriginalExtension();
                                                            $location = public_path('img/production/' . $filename);
                                                            $dataLocation = 'img/production/' . $filename;
                                                            Image::make($img)->save($location);

                                                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-img']])->update(['body' => $dataLocation]);
                                                            if (Input::get('1-testimonials-message-4') != null) {
                                                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-p']])->update(['body' => Input::get('1-testimonials-message-4')]);
                                                                if (Input::get('1-testimonials-name-4') != null) {
                                                                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-1']])->update(['body' => Input::get('1-testimonials-name-4')]);
                                                                    if (Input::get('1-testimonials-position-4') != null) {
                                                                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-2']])->update(['body' => Input::get('1-testimonials-position-4')]);
                                                                        if (Input::get('1-testimonials-company-4') != null) {
                                                                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-3']])->update(['body' => Input::get('1-testimonials-company-4')]);
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif ($request->hasFile('1-testimonials-img-2')) {
                $img = $request->file('1-testimonials-img-2');
                $filename = time() . '.' . $img->getClientOriginalExtension();
                $location = public_path('img/production/' . $filename);
                $dataLocation = 'img/production/' . $filename;
                Image::make($img)->save($location);

                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-2-img']])->update(['body' => $dataLocation]);
                if (Input::get('1-testimonials-message-2') != null) {
                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-2-p']])->update(['body' => Input::get('1-testimonials-message-2')]);
                    if (Input::get('1-testimonials-name-2') != null) {
                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-2-h5-1']])->update(['body' => Input::get('1-testimonials-name-2')]);
                        if (Input::get('1-testimonials-position-2') != null) {
                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-2-h5-2']])->update(['body' => Input::get('1-testimonials-position-2')]);
                            if (Input::get('1-testimonials-company-2') != null) {
                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-2-h5-3']])->update(['body' => Input::get('1-testimonials-company-2')]);
                                if ($request->hasFile('1-testimonials-img-3')) {
                                    $img = $request->file('1-testimonials-img-3');
                                    $filename = time() . '.' . $img->getClientOriginalExtension();
                                    $location = public_path('img/production/' . $filename);
                                    $dataLocation = 'img/production/' . $filename;
                                    Image::make($img)->save($location);

                                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-img']])->update(['body' => $dataLocation]);
                                    if (Input::get('1-testimonials-message-3') != null) {
                                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-p']])->update(['body' => Input::get('1-testimonials-message-3')]);
                                        if (Input::get('1-testimonials-name-3') != null) {
                                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-h5-1']])->update(['body' => Input::get('1-testimonials-name-3')]);
                                            if (Input::get('1-testimonials-position-3') != null) {
                                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-h5-2']])->update(['body' => Input::get('1-testimonials-position-3')]);
                                                if (Input::get('1-testimonials-company-3') != null) {
                                                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-h5-3']])->update(['body' => Input::get('1-testimonials-company-3')]);
                                                    if ($request->hasFile('1-testimonials-img-4')) {
                                                        $img = $request->file('1-testimonials-img-4');
                                                        $filename = time() . '.' . $img->getClientOriginalExtension();
                                                        $location = public_path('img/production/' . $filename);
                                                        $dataLocation = 'img/production/' . $filename;
                                                        Image::make($img)->save($location);

                                                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-img']])->update(['body' => $dataLocation]);
                                                        if (Input::get('1-testimonials-message-4') != null) {
                                                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-p']])->update(['body' => Input::get('1-testimonials-message-4')]);
                                                            if (Input::get('1-testimonials-name-4') != null) {
                                                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-1']])->update(['body' => Input::get('1-testimonials-name-4')]);
                                                                if (Input::get('1-testimonials-position-4') != null) {
                                                                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-2']])->update(['body' => Input::get('1-testimonials-position-4')]);
                                                                    if (Input::get('1-testimonials-company-4') != null) {
                                                                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-3']])->update(['body' => Input::get('1-testimonials-company-4')]);
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif (Input::get('1-testimonials-message-2') != null) {
                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-2-p']])->update(['body' => Input::get('1-testimonials-message-2')]);
                if (Input::get('1-testimonials-name-2') != null) {
                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-2-h5-1']])->update(['body' => Input::get('1-testimonials-name-2')]);
                    if (Input::get('1-testimonials-position-2') != null) {
                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-2-h5-2']])->update(['body' => Input::get('1-testimonials-position-2')]);
                        if (Input::get('1-testimonials-company-2') != null) {
                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-2-h5-3']])->update(['body' => Input::get('1-testimonials-company-2')]);
                            if ($request->hasFile('1-testimonials-img-3')) {
                                $img = $request->file('1-testimonials-img-3');
                                $filename = time() . '.' . $img->getClientOriginalExtension();
                                $location = public_path('img/production/' . $filename);
                                $dataLocation = 'img/production/' . $filename;
                                Image::make($img)->save($location);

                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-img']])->update(['body' => $dataLocation]);
                                if (Input::get('1-testimonials-message-3') != null) {
                                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-p']])->update(['body' => Input::get('1-testimonials-message-3')]);
                                    if (Input::get('1-testimonials-name-3') != null) {
                                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-h5-1']])->update(['body' => Input::get('1-testimonials-name-3')]);
                                        if (Input::get('1-testimonials-position-3') != null) {
                                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-h5-2']])->update(['body' => Input::get('1-testimonials-position-3')]);
                                            if (Input::get('1-testimonials-company-3') != null) {
                                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-h5-3']])->update(['body' => Input::get('1-testimonials-company-3')]);
                                                if ($request->hasFile('1-testimonials-img-4')) {
                                                    $img = $request->file('1-testimonials-img-4');
                                                    $filename = time() . '.' . $img->getClientOriginalExtension();
                                                    $location = public_path('img/production/' . $filename);
                                                    $dataLocation = 'img/production/' . $filename;
                                                    Image::make($img)->save($location);

                                                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-img']])->update(['body' => $dataLocation]);
                                                    if (Input::get('1-testimonials-message-4') != null) {
                                                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-p']])->update(['body' => Input::get('1-testimonials-message-4')]);
                                                        if (Input::get('1-testimonials-name-4') != null) {
                                                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-1']])->update(['body' => Input::get('1-testimonials-name-4')]);
                                                            if (Input::get('1-testimonials-position-4') != null) {
                                                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-2']])->update(['body' => Input::get('1-testimonials-position-4')]);
                                                                if (Input::get('1-testimonials-company-4') != null) {
                                                                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-3']])->update(['body' => Input::get('1-testimonials-company-4')]);
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif (Input::get('1-testimonials-name-2') != null) {
                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-2-h5-1']])->update(['body' => Input::get('1-testimonials-name-2')]);
                if (Input::get('1-testimonials-position-2') != null) {
                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-2-h5-2']])->update(['body' => Input::get('1-testimonials-position-2')]);
                    if (Input::get('1-testimonials-company-2') != null) {
                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-2-h5-3']])->update(['body' => Input::get('1-testimonials-company-2')]);
                        if ($request->hasFile('1-testimonials-img-3')) {
                            $img = $request->file('1-testimonials-img-3');
                            $filename = time() . '.' . $img->getClientOriginalExtension();
                            $location = public_path('img/production/' . $filename);
                            $dataLocation = 'img/production/' . $filename;
                            Image::make($img)->save($location);

                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-img']])->update(['body' => $dataLocation]);
                            if (Input::get('1-testimonials-message-3') != null) {
                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-p']])->update(['body' => Input::get('1-testimonials-message-3')]);
                                if (Input::get('1-testimonials-name-3') != null) {
                                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-h5-1']])->update(['body' => Input::get('1-testimonials-name-3')]);
                                    if (Input::get('1-testimonials-position-3') != null) {
                                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-h5-2']])->update(['body' => Input::get('1-testimonials-position-3')]);
                                        if (Input::get('1-testimonials-company-3') != null) {
                                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-h5-3']])->update(['body' => Input::get('1-testimonials-company-3')]);
                                            if ($request->hasFile('1-testimonials-img-4')) {
                                                $img = $request->file('1-testimonials-img-4');
                                                $filename = time() . '.' . $img->getClientOriginalExtension();
                                                $location = public_path('img/production/' . $filename);
                                                $dataLocation = 'img/production/' . $filename;
                                                Image::make($img)->save($location);

                                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-img']])->update(['body' => $dataLocation]);
                                                if (Input::get('1-testimonials-message-4') != null) {
                                                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-p']])->update(['body' => Input::get('1-testimonials-message-4')]);
                                                    if (Input::get('1-testimonials-name-4') != null) {
                                                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-1']])->update(['body' => Input::get('1-testimonials-name-4')]);
                                                        if (Input::get('1-testimonials-position-4') != null) {
                                                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-2']])->update(['body' => Input::get('1-testimonials-position-4')]);
                                                            if (Input::get('1-testimonials-company-4') != null) {
                                                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-3']])->update(['body' => Input::get('1-testimonials-company-4')]);
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif (Input::get('1-testimonials-position-2') != null) {
                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-2-h5-2']])->update(['body' => Input::get('1-testimonials-position-2')]);
                if (Input::get('1-testimonials-company-2') != null) {
                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-2-h5-3']])->update(['body' => Input::get('1-testimonials-company-2')]);
                    if ($request->hasFile('1-testimonials-img-3')) {
                        $img = $request->file('1-testimonials-img-3');
                        $filename = time() . '.' . $img->getClientOriginalExtension();
                        $location = public_path('img/production/' . $filename);
                        $dataLocation = 'img/production/' . $filename;
                        Image::make($img)->save($location);

                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-img']])->update(['body' => $dataLocation]);
                        if (Input::get('1-testimonials-message-3') != null) {
                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-p']])->update(['body' => Input::get('1-testimonials-message-3')]);
                            if (Input::get('1-testimonials-name-3') != null) {
                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-h5-1']])->update(['body' => Input::get('1-testimonials-name-3')]);
                                if (Input::get('1-testimonials-position-3') != null) {
                                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-h5-2']])->update(['body' => Input::get('1-testimonials-position-3')]);
                                    if (Input::get('1-testimonials-company-3') != null) {
                                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-h5-3']])->update(['body' => Input::get('1-testimonials-company-3')]);
                                        if ($request->hasFile('1-testimonials-img-4')) {
                                            $img = $request->file('1-testimonials-img-4');
                                            $filename = time() . '.' . $img->getClientOriginalExtension();
                                            $location = public_path('img/production/' . $filename);
                                            $dataLocation = 'img/production/' . $filename;
                                            Image::make($img)->save($location);

                                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-img']])->update(['body' => $dataLocation]);
                                            if (Input::get('1-testimonials-message-4') != null) {
                                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-p']])->update(['body' => Input::get('1-testimonials-message-4')]);
                                                if (Input::get('1-testimonials-name-4') != null) {
                                                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-1']])->update(['body' => Input::get('1-testimonials-name-4')]);
                                                    if (Input::get('1-testimonials-position-4') != null) {
                                                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-2']])->update(['body' => Input::get('1-testimonials-position-4')]);
                                                        if (Input::get('1-testimonials-company-4') != null) {
                                                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-3']])->update(['body' => Input::get('1-testimonials-company-4')]);
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif (Input::get('1-testimonials-company-2') != null) {
                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-2-h5-3']])->update(['body' => Input::get('1-testimonials-company-2')]);
                if ($request->hasFile('1-testimonials-img-3')) {
                    $img = $request->file('1-testimonials-img-3');
                    $filename = time() . '.' . $img->getClientOriginalExtension();
                    $location = public_path('img/production/' . $filename);
                    $dataLocation = 'img/production/' . $filename;
                    Image::make($img)->save($location);

                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-img']])->update(['body' => $dataLocation]);
                    if (Input::get('1-testimonials-message-3') != null) {
                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-p']])->update(['body' => Input::get('1-testimonials-message-3')]);
                        if (Input::get('1-testimonials-name-3') != null) {
                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-h5-1']])->update(['body' => Input::get('1-testimonials-name-3')]);
                            if (Input::get('1-testimonials-position-3') != null) {
                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-h5-2']])->update(['body' => Input::get('1-testimonials-position-3')]);
                                if (Input::get('1-testimonials-company-3') != null) {
                                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-h5-3']])->update(['body' => Input::get('1-testimonials-company-3')]);
                                    if ($request->hasFile('1-testimonials-img-4')) {
                                        $img = $request->file('1-testimonials-img-4');
                                        $filename = time() . '.' . $img->getClientOriginalExtension();
                                        $location = public_path('img/production/' . $filename);
                                        $dataLocation = 'img/production/' . $filename;
                                        Image::make($img)->save($location);

                                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-img']])->update(['body' => $dataLocation]);
                                        if (Input::get('1-testimonials-message-4') != null) {
                                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-p']])->update(['body' => Input::get('1-testimonials-message-4')]);
                                            if (Input::get('1-testimonials-name-4') != null) {
                                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-1']])->update(['body' => Input::get('1-testimonials-name-4')]);
                                                if (Input::get('1-testimonials-position-4') != null) {
                                                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-2']])->update(['body' => Input::get('1-testimonials-position-4')]);
                                                    if (Input::get('1-testimonials-company-4') != null) {
                                                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-3']])->update(['body' => Input::get('1-testimonials-company-4')]);
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif ($request->hasFile('1-testimonials-img-3')) {
                $img = $request->file('1-testimonials-img-3');
                $filename = time() . '.' . $img->getClientOriginalExtension();
                $location = public_path('img/production/' . $filename);
                $dataLocation = 'img/production/' . $filename;
                Image::make($img)->save($location);

                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-img']])->update(['body' => $dataLocation]);
                if (Input::get('1-testimonials-message-3') != null) {
                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-p']])->update(['body' => Input::get('1-testimonials-message-3')]);
                    if (Input::get('1-testimonials-name-3') != null) {
                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-h5-1']])->update(['body' => Input::get('1-testimonials-name-3')]);
                        if (Input::get('1-testimonials-position-3') != null) {
                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-h5-2']])->update(['body' => Input::get('1-testimonials-position-3')]);
                            if (Input::get('1-testimonials-company-3') != null) {
                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-h5-3']])->update(['body' => Input::get('1-testimonials-company-3')]);
                                if ($request->hasFile('1-testimonials-img-4')) {
                                    $img = $request->file('1-testimonials-img-4');
                                    $filename = time() . '.' . $img->getClientOriginalExtension();
                                    $location = public_path('img/production/' . $filename);
                                    $dataLocation = 'img/production/' . $filename;
                                    Image::make($img)->save($location);

                                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-img']])->update(['body' => $dataLocation]);
                                    if (Input::get('1-testimonials-message-4') != null) {
                                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-p']])->update(['body' => Input::get('1-testimonials-message-4')]);
                                        if (Input::get('1-testimonials-name-4') != null) {
                                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-1']])->update(['body' => Input::get('1-testimonials-name-4')]);
                                            if (Input::get('1-testimonials-position-4') != null) {
                                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-2']])->update(['body' => Input::get('1-testimonials-position-4')]);
                                                if (Input::get('1-testimonials-company-4') != null) {
                                                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-3']])->update(['body' => Input::get('1-testimonials-company-4')]);
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif (Input::get('1-testimonials-message-3') != null) {
                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-p']])->update(['body' => Input::get('1-testimonials-message-3')]);
                if (Input::get('1-testimonials-name-3') != null) {
                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-h5-1']])->update(['body' => Input::get('1-testimonials-name-3')]);
                    if (Input::get('1-testimonials-position-3') != null) {
                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-h5-2']])->update(['body' => Input::get('1-testimonials-position-3')]);
                        if (Input::get('1-testimonials-company-3') != null) {
                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-h5-3']])->update(['body' => Input::get('1-testimonials-company-3')]);
                            if ($request->hasFile('1-testimonials-img-4')) {
                                $img = $request->file('1-testimonials-img-4');
                                $filename = time() . '.' . $img->getClientOriginalExtension();
                                $location = public_path('img/production/' . $filename);
                                $dataLocation = 'img/production/' . $filename;
                                Image::make($img)->save($location);

                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-img']])->update(['body' => $dataLocation]);
                                if (Input::get('1-testimonials-message-4') != null) {
                                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-p']])->update(['body' => Input::get('1-testimonials-message-4')]);
                                    if (Input::get('1-testimonials-name-4') != null) {
                                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-1']])->update(['body' => Input::get('1-testimonials-name-4')]);
                                        if (Input::get('1-testimonials-position-4') != null) {
                                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-2']])->update(['body' => Input::get('1-testimonials-position-4')]);
                                            if (Input::get('1-testimonials-company-4') != null) {
                                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-3']])->update(['body' => Input::get('1-testimonials-company-4')]);
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif (Input::get('1-testimonials-name-3') != null) {
                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-h5-1']])->update(['body' => Input::get('1-testimonials-name-3')]);
                if (Input::get('1-testimonials-position-3') != null) {
                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-h5-2']])->update(['body' => Input::get('1-testimonials-position-3')]);
                    if (Input::get('1-testimonials-company-3') != null) {
                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-h5-3']])->update(['body' => Input::get('1-testimonials-company-3')]);
                        if ($request->hasFile('1-testimonials-img-4')) {
                            $img = $request->file('1-testimonials-img-4');
                            $filename = time() . '.' . $img->getClientOriginalExtension();
                            $location = public_path('img/production/' . $filename);
                            $dataLocation = 'img/production/' . $filename;
                            Image::make($img)->save($location);

                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-img']])->update(['body' => $dataLocation]);
                            if (Input::get('1-testimonials-message-4') != null) {
                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-p']])->update(['body' => Input::get('1-testimonials-message-4')]);
                                if (Input::get('1-testimonials-name-4') != null) {
                                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-1']])->update(['body' => Input::get('1-testimonials-name-4')]);
                                    if (Input::get('1-testimonials-position-4') != null) {
                                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-2']])->update(['body' => Input::get('1-testimonials-position-4')]);
                                        if (Input::get('1-testimonials-company-4') != null) {
                                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-3']])->update(['body' => Input::get('1-testimonials-company-4')]);
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif (Input::get('1-testimonials-position-3') != null) {
                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-h5-2']])->update(['body' => Input::get('1-testimonials-position-3')]);
                if (Input::get('1-testimonials-company-3') != null) {
                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-h5-3']])->update(['body' => Input::get('1-testimonials-company-3')]);
                    if ($request->hasFile('1-testimonials-img-4')) {
                        $img = $request->file('1-testimonials-img-4');
                        $filename = time() . '.' . $img->getClientOriginalExtension();
                        $location = public_path('img/production/' . $filename);
                        $dataLocation = 'img/production/' . $filename;
                        Image::make($img)->save($location);

                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-img']])->update(['body' => $dataLocation]);
                        if (Input::get('1-testimonials-message-4') != null) {
                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-p']])->update(['body' => Input::get('1-testimonials-message-4')]);
                            if (Input::get('1-testimonials-name-4') != null) {
                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-1']])->update(['body' => Input::get('1-testimonials-name-4')]);
                                if (Input::get('1-testimonials-position-4') != null) {
                                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-2']])->update(['body' => Input::get('1-testimonials-position-4')]);
                                    if (Input::get('1-testimonials-company-4') != null) {
                                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-3']])->update(['body' => Input::get('1-testimonials-company-4')]);
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif (Input::get('1-testimonials-company-3') != null) {
                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-3-h5-3']])->update(['body' => Input::get('1-testimonials-company-3')]);
                if ($request->hasFile('1-testimonials-img-4')) {
                    $img = $request->file('1-testimonials-img-4');
                    $filename = time() . '.' . $img->getClientOriginalExtension();
                    $location = public_path('img/production/' . $filename);
                    $dataLocation = 'img/production/' . $filename;
                    Image::make($img)->save($location);

                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-img']])->update(['body' => $dataLocation]);
                    if (Input::get('1-testimonials-message-4') != null) {
                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-p']])->update(['body' => Input::get('1-testimonials-message-4')]);
                        if (Input::get('1-testimonials-name-4') != null) {
                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-1']])->update(['body' => Input::get('1-testimonials-name-4')]);
                            if (Input::get('1-testimonials-position-4') != null) {
                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-2']])->update(['body' => Input::get('1-testimonials-position-4')]);
                                if (Input::get('1-testimonials-company-4') != null) {
                                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-3']])->update(['body' => Input::get('1-testimonials-company-4')]);
                                }
                            }
                        }
                    }
                }
            } elseif ($request->hasFile('1-testimonials-img-4')) {
                $img = $request->file('1-testimonials-img-4');
                $filename = time() . '.' . $img->getClientOriginalExtension();
                $location = public_path('img/production/' . $filename);
                $dataLocation = 'img/production/' . $filename;
                Image::make($img)->save($location);

                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-img']])->update(['body' => $dataLocation]);
                if (Input::get('1-testimonials-message-4') != null) {
                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-p']])->update(['body' => Input::get('1-testimonials-message-4')]);
                    if (Input::get('1-testimonials-name-4') != null) {
                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-1']])->update(['body' => Input::get('1-testimonials-name-4')]);
                        if (Input::get('1-testimonials-position-4') != null) {
                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-2']])->update(['body' => Input::get('1-testimonials-position-4')]);
                            if (Input::get('1-testimonials-company-4') != null) {
                                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-3']])->update(['body' => Input::get('1-testimonials-company-4')]);
                            }
                        }
                    }
                }
            } elseif (Input::get('1-testimonials-message-4') != null) {
                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-p']])->update(['body' => Input::get('1-testimonials-message-4')]);
                if (Input::get('1-testimonials-name-4') != null) {
                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-1']])->update(['body' => Input::get('1-testimonials-name-4')]);
                    if (Input::get('1-testimonials-position-4') != null) {
                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-2']])->update(['body' => Input::get('1-testimonials-position-4')]);
                        if (Input::get('1-testimonials-company-4') != null) {
                            $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-3']])->update(['body' => Input::get('1-testimonials-company-4')]);
                        }
                    }
                }
            } elseif (Input::get('1-testimonials-name-4') != null) {
                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-1']])->update(['body' => Input::get('1-testimonials-name-4')]);
                if (Input::get('1-testimonials-position-4') != null) {
                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-2']])->update(['body' => Input::get('1-testimonials-position-4')]);
                    if (Input::get('1-testimonials-company-4') != null) {
                        $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-3']])->update(['body' => Input::get('1-testimonials-company-4')]);
                    }
                }
            } elseif (Input::get('1-testimonials-position-4') != null) {
                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-2']])->update(['body' => Input::get('1-testimonials-position-4')]);
                if (Input::get('1-testimonials-company-4') != null) {
                    $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-3']])->update(['body' => Input::get('1-testimonials-company-4')]);
                }
            } elseif (Input::get('1-testimonials-company-4') != null) {
                $content->where([['pages_id', '=', '2'], ['section', '=', '2-3-4-h5-3']])->update(['body' => Input::get('1-testimonials-company-4')]);
            }
        }

        return redirect('/dash-about');
    }

    public function updateAboutPartners(Request $request)
    {
        if(Auth::check())
        {
            $content = new Content;
            
            if($request->hasFile('1-partners-img-1') && Input::get('1-partners-number-1') == 1)
            {
                $img = $request->file('1-partners-img-1');
                $filename = time() . '.' . $img->getClientOriginalExtension();
                $location = public_path('img/production/' . $filename);
                $dataLocation = 'img/production/' . $filename;
                Image::make($img)->save($location);
                
                $content->where([['pages_id','=','2'],['section','=','2-4-1-img']])->update(['body' => $dataLocation]);
                if(Input::get('1-partners-name-1') != null && Input::get('1-partners-number-1') == 1)
                {
                    $content->where([['pages_id','=','2'],['section','=','2-4-1-img-h1']])->update(['body' => Input::get('1-partners-name-1')]);
                }
            }
            elseif($request->hasFile('1-partners-img-1') && Input::get('1-partners-number-1') == 2)
            {
                $img = $request->file('1-partners-img-1');
                $filename = time() . '.' . $img->getClientOriginalExtension();
                $location = public_path('img/production/' . $filename);
                $dataLocation = 'img/production/' . $filename;
                Image::make($img)->save($location);
                
                $content->where([['pages_id','=','2'],['section','=','2-4-2-img']])->update(['body' => $dataLocation]);
                if(Input::get('1-partners-name-1') != null && Input::get('1-partners-number-1') == 2)
                {
                    $content->where([['pages_id','=','2'],['section','=','2-4-2-img-h1']])->update(['body' => Input::get('1-partners-name-1')]);
                }
            }
            elseif($request->hasFile('1-partners-img-1') && Input::get('1-partners-number-1') == 3)
            {
                $img = $request->file('1-partners-img-1');
                $filename = time() . '.' . $img->getClientOriginalExtension();
                $location = public_path('img/production/' . $filename);
                $dataLocation = 'img/production/' . $filename;
                Image::make($img)->save($location);
                
                $content->where([['pages_id','=','2'],['section','=','2-4-3-img']])->update(['body' => $dataLocation]);
                if(Input::get('1-partners-name-1') != null && Input::get('1-partners-number-1') == 3)
                {
                    $content->where([['pages_id','=','2'],['section','=','2-4-3-img-h1']])->update(['body' => Input::get('1-partners-name-1')]);
                }
            }
            elseif($request->hasFile('1-partners-img-1') && Input::get('1-partners-number-1') == 4)
            {
                $img = $request->file('1-partners-img-1');
                $filename = time() . '.' . $img->getClientOriginalExtension();
                $location = public_path('img/production/' . $filename);
                $dataLocation = 'img/production/' . $filename;
                Image::make($img)->save($location);
                
                $content->where([['pages_id','=','2'],['section','=','2-4-4-img']])->update(['body' => $dataLocation]);
                if(Input::get('1-partners-name-1') != null && Input::get('1-partners-number-1') == 4)
                {
                    $content->where([['pages_id','=','2'],['section','=','2-4-4-img-h1']])->update(['body' => Input::get('1-partners-name-1')]);
                }
            }
            elseif($request->hasFile('1-partners-img-1') && Input::get('1-partners-number-1') == 5)
            {
                $img = $request->file('1-partners-img-1');
                $filename = time() . '.' . $img->getClientOriginalExtension();
                $location = public_path('img/production/' . $filename);
                $dataLocation = 'img/production/' . $filename;
                Image::make($img)->save($location);
                
                $content->where([['pages_id','=','2'],['section','=','2-4-5-img']])->update(['body' => $dataLocation]);
                if(Input::get('1-partners-name-1') != null && Input::get('1-partners-number-1') == 5)
                {
                    $content->where([['pages_id','=','2'],['section','=','2-4-5-img-h1']])->update(['body' => Input::get('1-partners-name-1')]);
                }
            }
            elseif($request->hasFile('1-partners-img-1') && Input::get('1-partners-number-1') == 6)
            {
                $img = $request->file('1-partners-img-1');
                $filename = time() . '.' . $img->getClientOriginalExtension();
                $location = public_path('img/production/' . $filename);
                $dataLocation = 'img/production/' . $filename;
                Image::make($img)->save($location);
                
                $content->where([['pages_id','=','2'],['section','=','2-4-6-img']])->update(['body' => $dataLocation]);
                if(Input::get('1-partners-name-1') != null && Input::get('1-partners-number-1') == 6)
                {
                    $content->where([['pages_id','=','2'],['section','=','2-4-6-img-h1']])->update(['body' => Input::get('1-partners-name-1')]);
                }
            }
            elseif(Input::get('1-partners-name-1') != null && Input::get('1-partners-number-1') == 1)
                {
                    $content->where([['pages_id','=','2'],['section','=','2-4-1-img-h1']])->update(['body' => Input::get('1-partners-name-1')]);
                }
                elseif(Input::get('1-partners-name-1') != null && Input::get('1-partners-number-1') == 2)
                {
                    $content->where([['pages_id','=','2'],['section','=','2-4-2-img-h1']])->update(['body' => Input::get('1-partners-name-1')]);
                }
                elseif(Input::get('1-partners-name-1') != null && Input::get('1-partners-number-1') == 3)
                {
                    $content->where([['pages_id','=','2'],['section','=','2-4-3-img-h1']])->update(['body' => Input::get('1-partners-name-1')]);
                }
                elseif(Input::get('1-partners-name-1') != null && Input::get('1-partners-number-1') == 4)
                {
                    $content->where([['pages_id','=','2'],['section','=','2-4-4-img-h1']])->update(['body' => Input::get('1-partners-name-1')]);
                }
                elseif(Input::get('1-partners-name-1') != null && Input::get('1-partners-number-1') == 5)
                {
                    $content->where([['pages_id','=','2'],['section','=','2-4-5-img-h1']])->update(['body' => Input::get('1-partners-name-1')]);
                }
                elseif(Input::get('1-partners-name-1') != null && Input::get('1-partners-number-1') == 6)
                {
                    $content->where([['pages_id','=','2'],['section','=','2-4-6-img-h1']])->update(['body' => Input::get('1-partners-name-1')]);
                }
            return redirect('/dash-about');
        }
    }
    
    public function updateAboutTeam(Request $request)
    {
        if(Auth::check())
        {
            $content = new Content;
            
            
            return redirect('/dash-about');
        }
    }
}
