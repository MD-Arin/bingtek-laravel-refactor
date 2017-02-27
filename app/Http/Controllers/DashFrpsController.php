<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Content;
use Illuminate\Support\Facades\Auth;
use Image;

class DashFrpsController extends Controller
{
    public function updateOfficePartitioning(Request $request) {
        $contents = new Content;

        if (Auth::check()) {
            if ($request->hasFile('1-OfficePart-img-1')) {
                $img = $request->file('1-OfficePart-img-1');
                $filename = time() . '.' . $img->getClientOriginalExtension();
                $location = public_path('img/production/' . $filename);
                $dataLocation = 'img/production/' . $filename;
                Image::make($img)->save($location);

                $contents->where([['pages_id', '=', '6'], ['section', '=', '6-1-1-img']])->update(['body' => $dataLocation]);
                if (Input::get('1-OfficePart-h1-1') != null) {
                    $contents->where([['pages_id', '=', '6'], ['section', '=', '6-1-1-h1']])->update(['body' => Input::get('1-OfficePart-h1-1')]);
                    if (Input::get('1-OfficePart-p-1') != null) {
                        $contents->where([['pages_id', '=', '6'], ['section', '=', '6-1-1-p']])->update(['body' => Input::get('1-OfficePart-p-1')]);
                    }
                }
            } elseif (Input::get('1-OfficePart-h1-1') != null) {
                $contents->where([['pages_id', '=', '6'], ['section', '=', '6-1-1-h1']])->update(['body' => Input::get('1-OfficePart-h1-1')]);
                if (Input::get('1-OfficePart-p-1') != null) {
                    $contents->where([['pages_id', '=', '6'], ['section', '=', '6-1-1-p']])->update(['body' => Input::get('1-OfficePart-p-1')]);
                }
            } elseif (Input::get('1-OfficePart-p-1') != null) {
                $contents->where([['pages_id', '=', '6'], ['section', '=', '6-1-1-p']])->update(['body' => Input::get('1-OfficePart-p-1')]);
            }


            return redirect('dash-frps');
        }
    }

    public function updateOfficeSmart(Request $request) {
        $contents = new Content;

        if (Auth::check()) {

            if ($request->hasFile('1-OfficeSmart-img-1')) {
                $img = $request->file('1-OfficeSmart-img-1');
                $filename = time() . '.' . $img->getClientOriginalExtension();
                $location = public_path('img/production/' . $filename);
                $dataLocation = 'img/production/' . $filename;
                Image::make($img)->save($location);

                $contents->where([['pages_id', '=', '6'], ['section', '=', '6-2-1-img']])->update(['body' => $dataLocation]);
                if (Input::get('1-OfficeSmart-h1-1') != null) {
                    $contents->where([['pages_id', '=', '6'], ['section', '=', '6-2-1-h1']])->update(['body' => Input::get('1-OfficeSmart-h1-1')]);
                    if (Input::get('1-OfficeSmart-p-1') != null) {
                        $contents->where([['pages_id', '=', '6'], ['section', '=', '6-2-1-h1']])->update(['body' => Input::get('1-OfficeSmart-p-1')]);
                        if (Input::get('1-OfficeSmart-p-1') != null) {
                            $contents->where([['pages_id', '=', '6'], ['section', '=', '6-2-1-p']])->update(['body' => Input::get('1-OfficeSmart-p-1')]);
                            if (Input::get('1-OfficeSmart-li-1') != null) {
                                $contents->where([['pages_id', '=', '6'], ['section', '=', '6-2-1-li-1']])->update(['body' => Input::get('1-OfficeSmart-li-1')]);
                                if (Input::get('1-OfficeSmart-li-2') != null) {
                                    $contents->where([['pages_id', '=', '6'], ['section', '=', '6-2-1-li-2']])->update(['body' => Input::get('1-OfficeSmart-li-2')]);
                                    if (Input::get('1-OfficeSmart-li-3') != null) {
                                        $contents->where([['pages_id', '=', '6'], ['section', '=', '6-2-1-li-3']])->update(['body' => Input::get('1-OfficeSmart-li-3')]);
                                        if (Input::get('1-OfficeSmart-li-4') != null) {
                                            $contents->where([['pages_id', '=', '6'], ['section', '=', '6-2-1-li-4']])->update(['body' => Input::get('1-OfficeSmart-li-4')]);
                                        }
                                    }
                                }
                            }
                        }
                    }
                } elseif (Input::get('1-OfficeSmart-p-1') != null) {
                    $contents->where([['pages_id', '=', '6'], ['section', '=', '6-2-1-h1']])->update(['body' => Input::get('1-OfficeSmart-p-1')]);
                    if (Input::get('1-OfficeSmart-p-1') != null) {
                        $contents->where([['pages_id', '=', '6'], ['section', '=', '6-2-1-p']])->update(['body' => Input::get('1-OfficeSmart-p-1')]);
                        if (Input::get('1-OfficeSmart-li-1') != null) {
                            $contents->where([['pages_id', '=', '6'], ['section', '=', '6-2-1-li-1']])->update(['body' => Input::get('1-OfficeSmart-li-1')]);
                            if (Input::get('1-OfficeSmart-li-2') != null) {
                                $contents->where([['pages_id', '=', '6'], ['section', '=', '6-2-1-li-2']])->update(['body' => Input::get('1-OfficeSmart-li-2')]);
                                if (Input::get('1-OfficeSmart-li-3') != null) {
                                    $contents->where([['pages_id', '=', '6'], ['section', '=', '6-2-1-li-3']])->update(['body' => Input::get('1-OfficeSmart-li-3')]);
                                    if (Input::get('1-OfficeSmart-li-4') != null) {
                                        $contents->where([['pages_id', '=', '6'], ['section', '=', '6-2-1-li-4']])->update(['body' => Input::get('1-OfficeSmart-li-4')]);
                                    }
                                }
                            }
                        }
                    }
                } elseif (Input::get('1-OfficeSmart-p-1') != null) {
                    $contents->where([['pages_id', '=', '6'], ['section', '=', '6-2-1-p']])->update(['body' => Input::get('1-OfficeSmart-p-1')]);
                    if (Input::get('1-OfficeSmart-li-1') != null) {
                        $contents->where([['pages_id', '=', '6'], ['section', '=', '6-2-1-li-1']])->update(['body' => Input::get('1-OfficeSmart-li-1')]);
                        if (Input::get('1-OfficeSmart-li-2') != null) {
                            $contents->where([['pages_id', '=', '6'], ['section', '=', '6-2-1-li-2']])->update(['body' => Input::get('1-OfficeSmart-li-2')]);
                            if (Input::get('1-OfficeSmart-li-3') != null) {
                                $contents->where([['pages_id', '=', '6'], ['section', '=', '6-2-1-li-3']])->update(['body' => Input::get('1-OfficeSmart-li-3')]);
                                if (Input::get('1-OfficeSmart-li-4') != null) {
                                    $contents->where([['pages_id', '=', '6'], ['section', '=', '6-2-1-li-4']])->update(['body' => Input::get('1-OfficeSmart-li-4')]);
                                }
                            }
                        }
                    }
                } elseif (Input::get('1-OfficeSmart-li-1') != null) {
                    $contents->where([['pages_id', '=', '6'], ['section', '=', '6-2-1-li-1']])->update(['body' => Input::get('1-OfficeSmart-li-1')]);
                    if (Input::get('1-OfficeSmart-li-2') != null) {
                        $contents->where([['pages_id', '=', '6'], ['section', '=', '6-2-1-li-2']])->update(['body' => Input::get('1-OfficeSmart-li-2')]);
                        if (Input::get('1-OfficeSmart-li-3') != null) {
                            $contents->where([['pages_id', '=', '6'], ['section', '=', '6-2-1-li-3']])->update(['body' => Input::get('1-OfficeSmart-li-3')]);
                            if (Input::get('1-OfficeSmart-li-4') != null) {
                                $contents->where([['pages_id', '=', '6'], ['section', '=', '6-2-1-li-4']])->update(['body' => Input::get('1-OfficeSmart-li-4')]);
                            }
                        }
                    }
                } elseif (Input::get('1-OfficeSmart-li-2') != null) {
                    $contents->where([['pages_id', '=', '6'], ['section', '=', '6-2-1-li-2']])->update(['body' => Input::get('1-OfficeSmart-li-2')]);
                    if (Input::get('1-OfficeSmart-li-3') != null) {
                        $contents->where([['pages_id', '=', '6'], ['section', '=', '6-2-1-li-3']])->update(['body' => Input::get('1-OfficeSmart-li-3')]);
                        if (Input::get('1-OfficeSmart-li-4') != null) {
                            $contents->where([['pages_id', '=', '6'], ['section', '=', '6-2-1-li-4']])->update(['body' => Input::get('1-OfficeSmart-li-4')]);
                        }
                    }
                } elseif (Input::get('1-OfficeSmart-li-3') != null) {
                    $contents->where([['pages_id', '=', '6'], ['section', '=', '6-2-1-li-3']])->update(['body' => Input::get('1-OfficeSmart-li-3')]);
                    if (Input::get('1-OfficeSmart-li-4') != null) {
                        $contents->where([['pages_id', '=', '6'], ['section', '=', '6-2-1-li-4']])->update(['body' => Input::get('1-OfficeSmart-li-4')]);
                    }
                }
                elseif(Input::get('1-OfficeSmart-li-4') != null) {
                    $contents->where([['pages_id', '=', '6'], ['section', '=', '6-2-1-li-4']])->update(['body' => Input::get('1-OfficeSmart-li-4')]);
                }
            }
            return redirect('dash-frps');
        }
    }

    public function updateupdateOfficeAll(Request $request) {
        $contents = new Content;

        if (Auth::check()) {
            if (Input::get('1-OfficeAll-h1-1') != null) {
                $contents->where([['pages_id', '=', '6'], ['section', '=', '6-3-1-h1']])->update(['body' => Input::get('1-OfficeAll-h1-1')]);
                if (Input::get('1-OfficeAll-p-1') != null) {
                    $contents->where([['pages_id', '=', '6'], ['section', '=', '6-3-1-p']])->update(['body' => Input::get('1-OfficeAll-p-1')]);
                    if (Input::get('1-OfficeAll-li-1') != null) {
                        $contents->where([['pages_id', '=', '6'], ['section', '=', '6-3-1-li-1']])->update(['body' => Input::get('1-OfficeAll-li-1')]);
                        if (Input::get('1-OfficeAll-li-2') != null) {
                            $contents->where([['pages_id', '=', '6'], ['section', '=', '6-3-1-li-2']])->update(['body' => Input::get('1-OfficeAll-li-2')]);
                            if (Input::get('1-OfficeAll-li-3') != null) {
                                $contents->where([['pages_id', '=', '6'], ['section', '=', '6-3-1-li-3']])->update(['body' => Input::get('1-OfficeAll-li-3')]);
                                if (Input::get('1-OfficeAll-li-4') != null) {
                                    $contents->where([['pages_id', '=', '6'], ['section', '=', '6-3-1-li-4']])->update(['body' => Input::get('1-OfficeAll-li-4')]);
                                    if ($request->hasFile('1-OfficeAll-img-1')) {
                                        $img = $request->file('1-OfficeAll-img-1');
                                        $filename = time() . '.' . $img->getClientOriginalExtension();
                                        $location = public_path('img/production/' . $filename);
                                        $dataLocation = 'img/production/' . $filename;
                                        Image::make($img)->save($location);

                                        $contents->where([['pages_id', '=', '6'], ['section', '=', '6-3-1-img']])->update(['body' => $dataLocation]);
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif (Input::get('1-OfficeAll-p-1') != null) {
                $contents->where([['pages_id', '=', '6'], ['section', '=', '6-3-1-p']])->update(['body' => Input::get('1-OfficeAll-p-1')]);
                if (Input::get('1-OfficeAll-li-1') != null) {
                    $contents->where([['pages_id', '=', '6'], ['section', '=', '6-3-1-li-1']])->update(['body' => Input::get('1-OfficeAll-li-1')]);
                    if (Input::get('1-OfficeAll-li-2') != null) {
                        $contents->where([['pages_id', '=', '6'], ['section', '=', '6-3-1-li-2']])->update(['body' => Input::get('1-OfficeAll-li-2')]);
                        if (Input::get('1-OfficeAll-li-3') != null) {
                            $contents->where([['pages_id', '=', '6'], ['section', '=', '6-3-1-li-3']])->update(['body' => Input::get('1-OfficeAll-li-3')]);
                            if (Input::get('1-OfficeAll-li-4') != null) {
                                $contents->where([['pages_id', '=', '6'], ['section', '=', '6-3-1-li-4']])->update(['body' => Input::get('1-OfficeAll-li-4')]);
                                if ($request->hasFile('1-OfficeAll-img-1')) {
                                    $img = $request->file('1-OfficeAll-img-1');
                                    $filename = time() . '.' . $img->getClientOriginalExtension();
                                    $location = public_path('img/production/' . $filename);
                                    $dataLocation = 'img/production/' . $filename;
                                    Image::make($img)->save($location);

                                    $contents->where([['pages_id', '=', '6'], ['section', '=', '6-3-1-img']])->update(['body' => $dataLocation]);
                                }
                            }
                        }
                    }
                }
            } elseif (Input::get('1-OfficeAll-li-1') != null) {
                $contents->where([['pages_id', '=', '6'], ['section', '=', '6-3-1-li-1']])->update(['body' => Input::get('1-OfficeAll-li-1')]);
                if (Input::get('1-OfficeAll-li-2') != null) {
                    $contents->where([['pages_id', '=', '6'], ['section', '=', '6-3-1-li-2']])->update(['body' => Input::get('1-OfficeAll-li-2')]);
                    if (Input::get('1-OfficeAll-li-3') != null) {
                        $contents->where([['pages_id', '=', '6'], ['section', '=', '6-3-1-li-3']])->update(['body' => Input::get('1-OfficeAll-li-3')]);
                        if (Input::get('1-OfficeAll-li-4') != null) {
                            $contents->where([['pages_id', '=', '6'], ['section', '=', '6-3-1-li-4']])->update(['body' => Input::get('1-OfficeAll-li-4')]);
                            if ($request->hasFile('1-OfficeAll-img-1')) {
                                $img = $request->file('1-OfficeAll-img-1');
                                $filename = time() . '.' . $img->getClientOriginalExtension();
                                $location = public_path('img/production/' . $filename);
                                $dataLocation = 'img/production/' . $filename;
                                Image::make($img)->save($location);

                                $contents->where([['pages_id', '=', '6'], ['section', '=', '6-3-1-img']])->update(['body' => $dataLocation]);
                            }
                        }
                    }
                }
            } elseif (Input::get('1-OfficeAll-li-2') != null) {
                $contents->where([['pages_id', '=', '6'], ['section', '=', '6-3-1-li-2']])->update(['body' => Input::get('1-OfficeAll-li-2')]);
                if (Input::get('1-OfficeAll-li-3') != null) {
                    $contents->where([['pages_id', '=', '6'], ['section', '=', '6-3-1-li-3']])->update(['body' => Input::get('1-OfficeAll-li-3')]);
                    if (Input::get('1-OfficeAll-li-4') != null) {
                        $contents->where([['pages_id', '=', '6'], ['section', '=', '6-3-1-li-4']])->update(['body' => Input::get('1-OfficeAll-li-4')]);
                        if ($request->hasFile('1-OfficeAll-img-1')) {
                            $img = $request->file('1-OfficeAll-img-1');
                            $filename = time() . '.' . $img->getClientOriginalExtension();
                            $location = public_path('img/production/' . $filename);
                            $dataLocation = 'img/production/' . $filename;
                            Image::make($img)->save($location);

                            $contents->where([['pages_id', '=', '6'], ['section', '=', '6-3-1-img']])->update(['body' => $dataLocation]);
                        }
                    }
                }
            } elseif (Input::get('1-OfficeAll-li-3') != null) {
                $contents->where([['pages_id', '=', '6'], ['section', '=', '6-3-1-li-3']])->update(['body' => Input::get('1-OfficeAll-li-3')]);
                if (Input::get('1-OfficeAll-li-4') != null) {
                    $contents->where([['pages_id', '=', '6'], ['section', '=', '6-3-1-li-4']])->update(['body' => Input::get('1-OfficeAll-li-4')]);
                    if ($request->hasFile('1-OfficeAll-img-1')) {
                        $img = $request->file('1-OfficeAll-img-1');
                        $filename = time() . '.' . $img->getClientOriginalExtension();
                        $location = public_path('img/production/' . $filename);
                        $dataLocation = 'img/production/' . $filename;
                        Image::make($img)->save($location);

                        $contents->where([['pages_id', '=', '6'], ['section', '=', '6-3-1-img']])->update(['body' => $dataLocation]);
                    }
                }
            } elseif (Input::get('1-OfficeAll-li-4') != null) {
                $contents->where([['pages_id', '=', '6'], ['section', '=', '6-3-1-li-4']])->update(['body' => Input::get('1-OfficeAll-li-4')]);
                if ($request->hasFile('1-OfficeAll-img-1')) {
                    $img = $request->file('1-OfficeAll-img-1');
                    $filename = time() . '.' . $img->getClientOriginalExtension();
                    $location = public_path('img/production/' . $filename);
                    $dataLocation = 'img/production/' . $filename;
                    Image::make($img)->save($location);

                    $contents->where([['pages_id', '=', '6'], ['section', '=', '6-3-1-img']])->update(['body' => $dataLocation]);
                }
            } elseif ($request->hasFile('1-OfficeAll-img-1')) {
                $img = $request->file('1-OfficeAll-img-1');
                $filename = time() . '.' . $img->getClientOriginalExtension();
                $location = public_path('img/production/' . $filename);
                $dataLocation = 'img/production/' . $filename;
                Image::make($img)->save($location);

                $contents->where([['pages_id', '=', '6'], ['section', '=', '6-3-1-img']])->update(['body' => $dataLocation]);
            }

            return redirect('dash-frps');
        }
    }

    public function updateOfficeComfort(Request $request) {
        $contents = new Content;

        if (Auth::check()) {

            if (Input::get('1-OfficeComfort-h1-1') != null) {
                $contents->where([['pages_id', '=', '6'], ['section', '=', '6-4-1-h1']])->update(['body' => Input::get('1-OfficeComfort-h1-1')]);
                if (Input::get('1-OfficeComfort-h2-1') != null) {
                    $contents->where([['pages_id', '=', '6'], ['section', '=', '6-4-1-h2']])->update(['body' => Input::get('1-OfficeComfort-h2-1')]);
                    if (Input::get('1-OfficeComfort-p-1') != null) {
                        $contents->where([['pages_id', '=', '6'], ['section', '=', '6-4-1-p']])->update(['body' => Input::get('1-OfficeComfort-p-1')]);
                    }
                }
            } elseif (Input::get('1-OfficeComfort-h2-1') != null) {
                $contents->where([['pages_id', '=', '6'], ['section', '=', '6-4-1-h2']])->update(['body' => Input::get('1-OfficeComfort-h2-1')]);
                if (Input::get('1-OfficeComfort-p-1') != null) {
                    $contents->where([['pages_id', '=', '6'], ['section', '=', '6-4-1-p']])->update(['body' => Input::get('1-OfficeComfort-p-1')]);
                }
            } elseif (Input::get('1-OfficeComfort-p-1') != null) {
                $contents->where([['pages_id', '=', '6'], ['section', '=', '6-4-1-p']])->update(['body' => Input::get('1-OfficeComfort-p-1')]);
            }

            return redirect('dash-frps');
        }
    }

    public function updateOfficeDesign(Request $request) {
        $contents = new Content;

        if (Auth::check()) {

            if ($request->hasFile('1-OfficeDesign-img-1')) {
                $img = $request->file('1-OfficeDesign-img-1');
                $filename = time() . '.' . $img->getClientOriginalExtension();
                $location = public_path('img/production/' . $filename);
                $dataLocation = 'img/production/' . $filename;
                Image::make($img)->save($location);

                $contents->where([['pages_id', '=', '6'], ['section', '=', '6-5-1-img']])->update(['body' => $dataLocation]);
                if (Input::get('1-OfficeDesign-h1-1') != null) {
                    $contents->where([['pages_id', '=', '6'], ['section', '=', '6-5-1-h1']])->update(['body' => Input::get('1-OfficeDesign-h1-1')]);
                    if (Input::get('1-OfficeDesign-p-1') != null) {
                        $contents->where([['pages_id', '=', '6'], ['section', '=', '6-5-1-p']])->update(['body' => Input::get('1-OfficeDesign-p-1')]);
                    }
                }
            } elseif (Input::get('1-OfficeDesign-h1-1') != null) {
                $contents->where([['pages_id', '=', '6'], ['section', '=', '6-5-1-h1']])->update(['body' => Input::get('1-OfficeDesign-h1-1')]);
                if (Input::get('1-OfficeDesign-p-1') != null) {
                    $contents->where([['pages_id', '=', '6'], ['section', '=', '6-5-1-p']])->update(['body' => Input::get('1-OfficeDesign-p-1')]);
                }
            } elseif (Input::get('1-OfficeDesign-p-1') != null) {
                $contents->where([['pages_id', '=', '6'], ['section', '=', '6-5-1-p']])->update(['body' => Input::get('1-OfficeDesign-p-1')]);
            }

            return redirect('dash-frps');
        }
    }

    public function updateOfficeLuxury(Request $request) {
        $contents = new Content;

        if (Auth::check()) {

            if ($request->hasFile('1-OfficeLuxury-img-1')) {
                $img = $request->file('1-OfficeLuxury-img-1');
                $filename = time() . '.' . $img->getClientOriginalExtension();
                $location = public_path('img/production/' . $filename);
                $dataLocation = 'img/production/' . $filename;
                Image::make($img)->save($location);

                $contents->where([['pages_id', '=', '6'], ['section', '=', '6-6-1-img']])->update(['body' => $dataLocation]);
                if (Input::get('1-OfficeLuxury-h1-1') != null) {
                    $contents->where([['pages_id', '=', '6'], ['section', '=', '6-6-1-h1']])->update(['body' => Input::get('1-OfficeLuxury-h1-1')]);
                    if (Input::get('1-OfficeLuxury-p-1') != null) {
                        $contents->where([['pages_id', '=', '6'], ['section', '=', '6-6-1-p']])->update(['body' => Input::get('1-OfficeLuxury-p-1')]);
                    }
                }
            } elseif (Input::get('1-OfficeLuxury-h1-1') != null) {
                $contents->where([['pages_id', '=', '6'], ['section', '=', '6-6-1-h1']])->update(['body' => Input::get('1-OfficeLuxury-h1-1')]);
                if (Input::get('1-OfficeLuxury-p-1') != null) {
                    $contents->where([['pages_id', '=', '6'], ['section', '=', '6-6-1-p']])->update(['body' => Input::get('1-OfficeLuxury-p-1')]);
                }
            } elseif (Input::get('1-OfficeLuxury-p-1') != null) {
                $contents->where([['pages_id', '=', '6'], ['section', '=', '6-6-1-p']])->update(['body' => Input::get('1-OfficeLuxury-p-1')]);
            }

            return redirect('dash-frps');
        }
    }

}
