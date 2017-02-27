<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Content;
use Illuminate\Support\Facades\Auth;
use Image;

class DashTpsController extends Controller {

    public function updateSoftDevIntro(Request $request) {
        $contents = new Content;

        if (Auth::check()) {
            if (Input::get('1-softDevIntro-h1-1') != null) {
                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-1-1-h1']])->update(['body' => Input::get('1-softDevIntro-h1-1')]);
                if (Input::get('1-softDevIntro-p-1') != null) {
                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-1-1-p']])->update(['body' => Input::get('1-softDevIntro-p-1')]);
                }
            } elseif (Input::get('1-softDevIntro-p-1') != null) {
                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-1-1-p']])->update(['body' => Input::get('1-softDevIntro-p-1')]);
            }

            return redirect('dash-tps');
        }
    }

    public function updateSoftDev(Request $request) {
        $contents = new Content;

        if (Auth::check()) {
            if (Input::get('1-softDev-1-h1-1') != null) {
                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-1-h1']])->update(['body' => Input::get('1-softDev-1-h1-1')]);
                if (Input::get('1-softDev-1-h2-1') != null) {
                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-2-h1']])->update(['body' => Input::get('1-softDev-1-h2-1')]);
                    if (Input::get('1-softDev-1-p-1') != null) {
                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-2-p']])->update(['body' => Input::get('1-softDev-1-p-1')]);
                        if (Input::get('1-softDev-1-li-1') != null) {
                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-2-li-1']])->update(['body' => Input::get('1-softDev-1-li-1')]);
                            if (Input::get('1-softDev-1-li-2') != null) {
                                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-2-li-2']])->update(['body' => Input::get('1-softDev-1-li-2')]);
                                if (Input::get('1-softDev-1-li-3') != null) {
                                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-2-li-3']])->update(['body' => Input::get('1-softDev-1-li-3')]);
                                    if (Input::get('1-softDev-1-li-4') != null) {
                                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-2-li-4']])->update(['body' => Input::get('1-softDev-1-li-4')]);
                                        if ($request->hasFile('1-softDev-1-img-1')) {
                                            $img = $request->file('1-softDev-1-img-1');
                                            $filename = time() . '.' . $img->getClientOriginalExtension();
                                            $location = public_path('img/production/' . $filename);
                                            $dataLocation = 'img/production/' . $filename;
                                            Image::make($img)->save($location);

                                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-2-img']])->update(['body' => $dataLocation]);
                                            if ($request->hasFile('1-softDev-2-img-1')) {
                                                $img = $request->file('1-softDev-2-img-1');

                                                $filename = time() . '.' . $img->getClientOriginalExtension();
                                                $location = public_path('img/production/' . $filename);
                                                $dataLocation = 'img/production/' . $filename;
                                                Image::make($img)->save($location);

                                                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-img']])->update(['body' => $dataLocation]);
                                                if (Input::get('1-softDev-2-h2-1') != null) {
                                                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-h1']])->update(['body' => Input::get('1-softDev-2-h2-1')]);
                                                    if (Input::get('1-softDev-2-p-1') != null) {
                                                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-p']])->update(['body' => Input::get('1-softDev-2-p-1')]);
                                                        if (Input::get('1-softDev-2-li-1') != null) {
                                                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-1']])->update(['body' => Input::get('1-softDev-2-li-1')]);
                                                            if (Input::get('1-softDev-2-li-2') != null) {
                                                                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-2']])->update(['body' => Input::get('1-softDev-2-li-12')]);
                                                                if (Input::get('1-softDev-2-li-3') != null) {
                                                                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-3']])->update(['body' => Input::get('1-softDev-2-li-3')]);
                                                                    if (Input::get('1-softDev-2-li-4') != null) {
                                                                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-4']])->update(['body' => Input::get('1-softDev-2-li-4')]);
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
            } elseif (Input::get('1-softDev-1-h2-1') != null) {
                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-2-h1']])->update(['body' => Input::get('1-softDev-1-h2-1')]);
                if (Input::get('1-softDev-1-p-1') != null) {
                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-2-p']])->update(['body' => Input::get('1-softDev-1-p-1')]);
                    if (Input::get('1-softDev-1-li-1') != null) {
                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-2-li-1']])->update(['body' => Input::get('1-softDev-1-li-1')]);
                        if (Input::get('1-softDev-1-li-2') != null) {
                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-2-li-2']])->update(['body' => Input::get('1-softDev-1-li-2')]);
                            if (Input::get('1-softDev-1-li-3') != null) {
                                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-2-li-3']])->update(['body' => Input::get('1-softDev-1-li-3')]);
                                if (Input::get('1-softDev-1-li-4') != null) {
                                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-2-li-4']])->update(['body' => Input::get('1-softDev-1-li-4')]);
                                    if ($request->hasFile('1-softDev-1-img-1')) {
                                        $img = $request->file('1-softDev-1-img-1');
                                        $filename = time() . '.' . $img->getClientOriginalExtension();
                                        $location = public_path('img/production/' . $filename);
                                        $dataLocation = 'img/production/' . $filename;
                                        Image::make($img)->save($location);

                                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-2-img']])->update(['body' => $dataLocation]);
                                        if ($request->hasFile('1-softDev-2-img-1')) {
                                            $img = $request->file('1-softDev-2-img-1');

                                            $filename = time() . '.' . $img->getClientOriginalExtension();
                                            $location = public_path('img/production/' . $filename);
                                            $dataLocation = 'img/production/' . $filename;
                                            Image::make($img)->save($location);

                                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-img']])->update(['body' => $dataLocation]);
                                            if (Input::get('1-softDev-2-h2-1') != null) {
                                                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-h1']])->update(['body' => Input::get('1-softDev-2-h2-1')]);
                                                if (Input::get('1-softDev-2-p-1') != null) {
                                                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-p']])->update(['body' => Input::get('1-softDev-2-p-1')]);
                                                    if (Input::get('1-softDev-2-li-1') != null) {
                                                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-1']])->update(['body' => Input::get('1-softDev-2-li-1')]);
                                                        if (Input::get('1-softDev-2-li-2') != null) {
                                                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-2']])->update(['body' => Input::get('1-softDev-2-li-12')]);
                                                            if (Input::get('1-softDev-2-li-3') != null) {
                                                                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-3']])->update(['body' => Input::get('1-softDev-2-li-3')]);
                                                                if (Input::get('1-softDev-2-li-4') != null) {
                                                                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-4']])->update(['body' => Input::get('1-softDev-2-li-4')]);
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
            } elseif (Input::get('1-softDev-1-p-1') != null) {
                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-2-p']])->update(['body' => Input::get('1-softDev-1-p-1')]);
                if (Input::get('1-softDev-1-li-1') != null) {
                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-2-li-1']])->update(['body' => Input::get('1-softDev-1-li-1')]);
                    if (Input::get('1-softDev-1-li-2') != null) {
                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-2-li-2']])->update(['body' => Input::get('1-softDev-1-li-2')]);
                        if (Input::get('1-softDev-1-li-3') != null) {
                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-2-li-3']])->update(['body' => Input::get('1-softDev-1-li-3')]);
                            if (Input::get('1-softDev-1-li-4') != null) {
                                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-2-li-4']])->update(['body' => Input::get('1-softDev-1-li-4')]);
                                if ($request->hasFile('1-softDev-1-img-1')) {
                                    $img = $request->file('1-softDev-1-img-1');
                                    $filename = time() . '.' . $img->getClientOriginalExtension();
                                    $location = public_path('img/production/' . $filename);
                                    $dataLocation = 'img/production/' . $filename;
                                    Image::make($img)->save($location);

                                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-2-img']])->update(['body' => $dataLocation]);
                                    if ($request->hasFile('1-softDev-2-img-1')) {
                                        $img = $request->file('1-softDev-2-img-1');

                                        $filename = time() . '.' . $img->getClientOriginalExtension();
                                        $location = public_path('img/production/' . $filename);
                                        $dataLocation = 'img/production/' . $filename;
                                        Image::make($img)->save($location);

                                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-img']])->update(['body' => $dataLocation]);
                                        if (Input::get('1-softDev-2-h2-1') != null) {
                                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-h1']])->update(['body' => Input::get('1-softDev-2-h2-1')]);
                                            if (Input::get('1-softDev-2-p-1') != null) {
                                                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-p']])->update(['body' => Input::get('1-softDev-2-p-1')]);
                                                if (Input::get('1-softDev-2-li-1') != null) {
                                                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-1']])->update(['body' => Input::get('1-softDev-2-li-1')]);
                                                    if (Input::get('1-softDev-2-li-2') != null) {
                                                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-2']])->update(['body' => Input::get('1-softDev-2-li-12')]);
                                                        if (Input::get('1-softDev-2-li-3') != null) {
                                                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-3']])->update(['body' => Input::get('1-softDev-2-li-3')]);
                                                            if (Input::get('1-softDev-2-li-4') != null) {
                                                                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-4']])->update(['body' => Input::get('1-softDev-2-li-4')]);
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
            } elseif (Input::get('1-softDev-1-li-1') != null) {
                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-2-li-1']])->update(['body' => Input::get('1-softDev-1-li-1')]);
                if (Input::get('1-softDev-1-li-2') != null) {
                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-2-li-2']])->update(['body' => Input::get('1-softDev-1-li-2')]);
                    if (Input::get('1-softDev-1-li-3') != null) {
                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-2-li-3']])->update(['body' => Input::get('1-softDev-1-li-3')]);
                        if (Input::get('1-softDev-1-li-4') != null) {
                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-2-li-4']])->update(['body' => Input::get('1-softDev-1-li-4')]);
                            if ($request->hasFile('1-softDev-1-img-1')) {
                                $img = $request->file('1-softDev-1-img-1');
                                $filename = time() . '.' . $img->getClientOriginalExtension();
                                $location = public_path('img/production/' . $filename);
                                $dataLocation = 'img/production/' . $filename;
                                Image::make($img)->save($location);

                                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-2-img']])->update(['body' => $dataLocation]);
                                if ($request->hasFile('1-softDev-2-img-1')) {
                                    $img = $request->file('1-softDev-2-img-1');

                                    $filename = time() . '.' . $img->getClientOriginalExtension();
                                    $location = public_path('img/production/' . $filename);
                                    $dataLocation = 'img/production/' . $filename;
                                    Image::make($img)->save($location);

                                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-img']])->update(['body' => $dataLocation]);
                                    if (Input::get('1-softDev-2-h2-1') != null) {
                                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-h1']])->update(['body' => Input::get('1-softDev-2-h2-1')]);
                                        if (Input::get('1-softDev-2-p-1') != null) {
                                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-p']])->update(['body' => Input::get('1-softDev-2-p-1')]);
                                            if (Input::get('1-softDev-2-li-1') != null) {
                                                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-1']])->update(['body' => Input::get('1-softDev-2-li-1')]);
                                                if (Input::get('1-softDev-2-li-2') != null) {
                                                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-2']])->update(['body' => Input::get('1-softDev-2-li-12')]);
                                                    if (Input::get('1-softDev-2-li-3') != null) {
                                                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-3']])->update(['body' => Input::get('1-softDev-2-li-3')]);
                                                        if (Input::get('1-softDev-2-li-4') != null) {
                                                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-4']])->update(['body' => Input::get('1-softDev-2-li-4')]);
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
            } elseif (Input::get('1-softDev-1-li-2') != null) {
                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-2-li-2']])->update(['body' => Input::get('1-softDev-1-li-2')]);
                if (Input::get('1-softDev-1-li-3') != null) {
                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-2-li-3']])->update(['body' => Input::get('1-softDev-1-li-3')]);
                    if (Input::get('1-softDev-1-li-4') != null) {
                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-2-li-4']])->update(['body' => Input::get('1-softDev-1-li-4')]);
                        if ($request->hasFile('1-softDev-1-img-1')) {
                            $img = $request->file('1-softDev-1-img-1');
                            $filename = time() . '.' . $img->getClientOriginalExtension();
                            $location = public_path('img/production/' . $filename);
                            $dataLocation = 'img/production/' . $filename;
                            Image::make($img)->save($location);

                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-2-img']])->update(['body' => $dataLocation]);
                            if ($request->hasFile('1-softDev-2-img-1')) {
                                $img = $request->file('1-softDev-2-img-1');

                                $filename = time() . '.' . $img->getClientOriginalExtension();
                                $location = public_path('img/production/' . $filename);
                                $dataLocation = 'img/production/' . $filename;
                                Image::make($img)->save($location);

                                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-img']])->update(['body' => $dataLocation]);
                                if (Input::get('1-softDev-2-h2-1') != null) {
                                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-h1']])->update(['body' => Input::get('1-softDev-2-h2-1')]);
                                    if (Input::get('1-softDev-2-p-1') != null) {
                                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-p']])->update(['body' => Input::get('1-softDev-2-p-1')]);
                                        if (Input::get('1-softDev-2-li-1') != null) {
                                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-1']])->update(['body' => Input::get('1-softDev-2-li-1')]);
                                            if (Input::get('1-softDev-2-li-2') != null) {
                                                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-2']])->update(['body' => Input::get('1-softDev-2-li-12')]);
                                                if (Input::get('1-softDev-2-li-3') != null) {
                                                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-3']])->update(['body' => Input::get('1-softDev-2-li-3')]);
                                                    if (Input::get('1-softDev-2-li-4') != null) {
                                                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-4']])->update(['body' => Input::get('1-softDev-2-li-4')]);
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
            } elseif (Input::get('1-softDev-1-li-3') != null) {
                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-2-li-3']])->update(['body' => Input::get('1-softDev-1-li-3')]);
                if (Input::get('1-softDev-1-li-4') != null) {
                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-2-li-4']])->update(['body' => Input::get('1-softDev-1-li-4')]);
                    if ($request->hasFile('1-softDev-1-img-1')) {
                        $img = $request->file('1-softDev-1-img-1');
                        $filename = time() . '.' . $img->getClientOriginalExtension();
                        $location = public_path('img/production/' . $filename);
                        $dataLocation = 'img/production/' . $filename;
                        Image::make($img)->save($location);

                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-2-img']])->update(['body' => $dataLocation]);
                        if ($request->hasFile('1-softDev-2-img-1')) {
                            $img = $request->file('1-softDev-2-img-1');

                            $filename = time() . '.' . $img->getClientOriginalExtension();
                            $location = public_path('img/production/' . $filename);
                            $dataLocation = 'img/production/' . $filename;
                            Image::make($img)->save($location);

                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-img']])->update(['body' => $dataLocation]);
                            if (Input::get('1-softDev-2-h2-1') != null) {
                                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-h1']])->update(['body' => Input::get('1-softDev-2-h2-1')]);
                                if (Input::get('1-softDev-2-p-1') != null) {
                                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-p']])->update(['body' => Input::get('1-softDev-2-p-1')]);
                                    if (Input::get('1-softDev-2-li-1') != null) {
                                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-1']])->update(['body' => Input::get('1-softDev-2-li-1')]);
                                        if (Input::get('1-softDev-2-li-2') != null) {
                                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-2']])->update(['body' => Input::get('1-softDev-2-li-12')]);
                                            if (Input::get('1-softDev-2-li-3') != null) {
                                                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-3']])->update(['body' => Input::get('1-softDev-2-li-3')]);
                                                if (Input::get('1-softDev-2-li-4') != null) {
                                                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-4']])->update(['body' => Input::get('1-softDev-2-li-4')]);
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif (Input::get('1-softDev-1-li-4') != null) {
                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-2-li-4']])->update(['body' => Input::get('1-softDev-1-li-4')]);
                if ($request->hasFile('1-softDev-1-img-1')) {
                    $img = $request->file('1-softDev-1-img-1');
                    $filename = time() . '.' . $img->getClientOriginalExtension();
                    $location = public_path('img/production/' . $filename);
                    $dataLocation = 'img/production/' . $filename;
                    Image::make($img)->save($location);

                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-2-img']])->update(['body' => $dataLocation]);
                    if ($request->hasFile('1-softDev-2-img-1')) {
                        $img = $request->file('1-softDev-2-img-1');

                        $filename = time() . '.' . $img->getClientOriginalExtension();
                        $location = public_path('img/production/' . $filename);
                        $dataLocation = 'img/production/' . $filename;
                        Image::make($img)->save($location);

                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-img']])->update(['body' => $dataLocation]);
                        if (Input::get('1-softDev-2-h2-1') != null) {
                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-h1']])->update(['body' => Input::get('1-softDev-2-h2-1')]);
                            if (Input::get('1-softDev-2-p-1') != null) {
                                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-p']])->update(['body' => Input::get('1-softDev-2-p-1')]);
                                if (Input::get('1-softDev-2-li-1') != null) {
                                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-1']])->update(['body' => Input::get('1-softDev-2-li-1')]);
                                    if (Input::get('1-softDev-2-li-2') != null) {
                                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-2']])->update(['body' => Input::get('1-softDev-2-li-12')]);
                                        if (Input::get('1-softDev-2-li-3') != null) {
                                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-3']])->update(['body' => Input::get('1-softDev-2-li-3')]);
                                            if (Input::get('1-softDev-2-li-4') != null) {
                                                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-4']])->update(['body' => Input::get('1-softDev-2-li-4')]);
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif ($request->hasFile('1-softDev-1-img-1')) {
                $img = $request->file('1-softDev-1-img-1');
                $filename = time() . '.' . $img->getClientOriginalExtension();
                $location = public_path('img/production/' . $filename);
                $dataLocation = 'img/production/' . $filename;
                Image::make($img)->save($location);

                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-2-img']])->update(['body' => $dataLocation]);
                if ($request->hasFile('1-softDev-2-img-1')) {
                    $img = $request->file('1-softDev-2-img-1');

                    $filename = time() . '.' . $img->getClientOriginalExtension();
                    $location = public_path('img/production/' . $filename);
                    $dataLocation = 'img/production/' . $filename;
                    Image::make($img)->save($location);

                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-img']])->update(['body' => $dataLocation]);
                    if (Input::get('1-softDev-2-h2-1') != null) {
                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-h1']])->update(['body' => Input::get('1-softDev-2-h2-1')]);
                        if (Input::get('1-softDev-2-p-1') != null) {
                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-p']])->update(['body' => Input::get('1-softDev-2-p-1')]);
                            if (Input::get('1-softDev-2-li-1') != null) {
                                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-1']])->update(['body' => Input::get('1-softDev-2-li-1')]);
                                if (Input::get('1-softDev-2-li-2') != null) {
                                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-2']])->update(['body' => Input::get('1-softDev-2-li-12')]);
                                    if (Input::get('1-softDev-2-li-3') != null) {
                                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-3']])->update(['body' => Input::get('1-softDev-2-li-3')]);
                                        if (Input::get('1-softDev-2-li-4') != null) {
                                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-4']])->update(['body' => Input::get('1-softDev-2-li-4')]);
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif ($request->hasFile('1-softDev-2-img-1')) {
                $img = $request->file('1-softDev-2-img-1');

                $filename = time() . '.' . $img->getClientOriginalExtension();
                $location = public_path('img/production/' . $filename);
                $dataLocation = 'img/production/' . $filename;
                Image::make($img)->save($location);

                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-img']])->update(['body' => $dataLocation]);
                if (Input::get('1-softDev-2-h2-1') != null) {
                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-h1']])->update(['body' => Input::get('1-softDev-2-h2-1')]);
                    if (Input::get('1-softDev-2-p-1') != null) {
                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-p']])->update(['body' => Input::get('1-softDev-2-p-1')]);
                        if (Input::get('1-softDev-2-li-1') != null) {
                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-1']])->update(['body' => Input::get('1-softDev-2-li-1')]);
                            if (Input::get('1-softDev-2-li-2') != null) {
                                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-2']])->update(['body' => Input::get('1-softDev-2-li-12')]);
                                if (Input::get('1-softDev-2-li-3') != null) {
                                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-3']])->update(['body' => Input::get('1-softDev-2-li-3')]);
                                    if (Input::get('1-softDev-2-li-4') != null) {
                                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-4']])->update(['body' => Input::get('1-softDev-2-li-4')]);
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif (Input::get('1-softDev-2-h2-1') != null) {
                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-h1']])->update(['body' => Input::get('1-softDev-2-h2-1')]);
                if (Input::get('1-softDev-2-p-1') != null) {
                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-p']])->update(['body' => Input::get('1-softDev-2-p-1')]);
                    if (Input::get('1-softDev-2-li-1') != null) {
                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-1']])->update(['body' => Input::get('1-softDev-2-li-1')]);
                        if (Input::get('1-softDev-2-li-2') != null) {
                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-2']])->update(['body' => Input::get('1-softDev-2-li-12')]);
                            if (Input::get('1-softDev-2-li-3') != null) {
                                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-3']])->update(['body' => Input::get('1-softDev-2-li-3')]);
                                if (Input::get('1-softDev-2-li-4') != null) {
                                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-4']])->update(['body' => Input::get('1-softDev-2-li-4')]);
                                }
                            }
                        }
                    }
                }
            } elseif (Input::get('1-softDev-2-p-1') != null) {
                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-p']])->update(['body' => Input::get('1-softDev-2-p-1')]);
                if (Input::get('1-softDev-2-li-1') != null) {
                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-1']])->update(['body' => Input::get('1-softDev-2-li-1')]);
                    if (Input::get('1-softDev-2-li-2') != null) {
                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-2']])->update(['body' => Input::get('1-softDev-2-li-12')]);
                        if (Input::get('1-softDev-2-li-3') != null) {
                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-3']])->update(['body' => Input::get('1-softDev-2-li-3')]);
                            if (Input::get('1-softDev-2-li-4') != null) {
                                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-4']])->update(['body' => Input::get('1-softDev-2-li-4')]);
                            }
                        }
                    }
                }
            } elseif (Input::get('1-softDev-2-li-1') != null) {
                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-1']])->update(['body' => Input::get('1-softDev-2-li-1')]);
                if (Input::get('1-softDev-2-li-2') != null) {
                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-2']])->update(['body' => Input::get('1-softDev-2-li-12')]);
                    if (Input::get('1-softDev-2-li-3') != null) {
                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-3']])->update(['body' => Input::get('1-softDev-2-li-3')]);
                        if (Input::get('1-softDev-2-li-4') != null) {
                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-4']])->update(['body' => Input::get('1-softDev-2-li-4')]);
                        }
                    }
                }
            } elseif (Input::get('1-softDev-2-li-2') != null) {
                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-2']])->update(['body' => Input::get('1-softDev-2-li-12')]);
                if (Input::get('1-softDev-2-li-3') != null) {
                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-3']])->update(['body' => Input::get('1-softDev-2-li-3')]);
                    if (Input::get('1-softDev-2-li-4') != null) {
                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-4']])->update(['body' => Input::get('1-softDev-2-li-4')]);
                    }
                }
            } elseif (Input::get('1-softDev-2-li-3') != null) {
                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-3']])->update(['body' => Input::get('1-softDev-2-li-3')]);
                if (Input::get('1-softDev-2-li-4') != null) {
                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-4']])->update(['body' => Input::get('1-softDev-2-li-4')]);
                }
            } elseif (Input::get('1-softDev-2-li-4') != null) {
                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-2-3-li-4']])->update(['body' => Input::get('1-softDev-2-li-4')]);
            }

            return redirect('dash-tps');
        }
    }

    public function updateSoftMen(Request $request) {
        $contents = new Content;

        if (Auth::check()) {

            if (Input::get('1-softMen-1-h1-1') != null) {
                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-1-h1']])->update(['body' => Input::get('1-softMen-1-h1-1')]);
                if ($request->hasFile('1-softMen-1-img-1')) {
                    $img = $request->file('1-softMen-1-img-1');

                    $filename = time() . '.' . $img->getClientOriginalExtension();
                    $location = public_path('img/production/' . $filename);
                    $dataLocation = 'img/production/' . $filename;
                    Image::make($img)->save($location);

                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-1-img']])->update(['body' => $dataLocation]);
                    if (Input::get('1-softMen-1-h2-1') != null) {
                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-2-h1']])->update(['body' => Input::get('1-softMen-1-h2-1')]);
                        if (Input::get('1-softMen-1-p-1') != null) {
                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-2-p']])->update(['body' => Input::get('1-softMen-1-p-1')]);
                            if (Input::get('1-softMen-1-li-1') != null) {
                                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-2-li-1']])->update(['body' => Input::get('1-softMen-1-li-1')]);
                                if (Input::get('1-softMen-1-li-2') != null) {
                                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-2-li-2']])->update(['body' => Input::get('1-softMen-1-li-2')]);
                                    if (Input::get('1-softMen-1-li-3') != null) {
                                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-2-li-3']])->update(['body' => Input::get('1-softMen-1-li-3')]);
                                        if (Input::get('1-softMen-1-li-4') != null) {
                                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-2-li-4']])->update(['body' => Input::get('1-softMen-1-li-4')]);
                                            if (Input::get('1-softMen-2-h2-1') != null) {
                                                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-h1']])->update(['body' => Input::get('1-softMen-2-h2-1')]);
                                                if (Input::get('1-softMen-2-p-1') != null) {
                                                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-p']])->update(['body' => Input::get('1-softMen-2-p-1')]);
                                                    if (Input::get('1-softMen-2-li-1') != null) {
                                                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-1']])->update(['body' => Input::get('1-softMen-2-li-1')]);
                                                        if (Input::get('1-softMen-2-li-2') != null) {
                                                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-2']])->update(['body' => Input::get('1-softMen-2-li-2')]);
                                                            if (Input::get('1-softMen-2-li-3') != null) {
                                                                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-3']])->update(['body' => Input::get('1-softMen-2-li-3')]);
                                                                if (Input::get('1-softMen-2-li-4') != null) {
                                                                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-4']])->update(['body' => Input::get('1-softMen-2-li-4')]);
                                                                    if ($request->hasFile('1-softMen-2-img-1')) {
                                                                        $img = $request->file('1-softMen-2-img-1');

                                                                        $filename = time() . '.' . $img->getClientOriginalExtension();
                                                                        $location = public_path('img/production/' . $filename);
                                                                        $dataLocation = 'img/production/' . $filename;
                                                                        Image::make($img)->save($location);

                                                                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-img']])->update(['body' => $dataLocation]);
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
            } elseif ($request->hasFile('1-softMen-1-img-1')) {
                $img = $request->file('1-softMen-1-img-1');

                $filename = time() . '.' . $img->getClientOriginalExtension();
                $location = public_path('img/production/' . $filename);
                $dataLocation = 'img/production/' . $filename;
                Image::make($img)->save($location);

                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-1-img']])->update(['body' => $dataLocation]);
                if (Input::get('1-softMen-1-h2-1') != null) {
                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-2-h1']])->update(['body' => Input::get('1-softMen-1-h2-1')]);
                    if (Input::get('1-softMen-1-p-1') != null) {
                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-2-p']])->update(['body' => Input::get('1-softMen-1-p-1')]);
                        if (Input::get('1-softMen-1-li-1') != null) {
                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-2-li-1']])->update(['body' => Input::get('1-softMen-1-li-1')]);
                            if (Input::get('1-softMen-1-li-2') != null) {
                                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-2-li-2']])->update(['body' => Input::get('1-softMen-1-li-2')]);
                                if (Input::get('1-softMen-1-li-3') != null) {
                                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-2-li-3']])->update(['body' => Input::get('1-softMen-1-li-3')]);
                                    if (Input::get('1-softMen-1-li-4') != null) {
                                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-2-li-4']])->update(['body' => Input::get('1-softMen-1-li-4')]);
                                        if (Input::get('1-softMen-2-h2-1') != null) {
                                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-h1']])->update(['body' => Input::get('1-softMen-2-h2-1')]);
                                            if (Input::get('1-softMen-2-p-1') != null) {
                                                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-p']])->update(['body' => Input::get('1-softMen-2-p-1')]);
                                                if (Input::get('1-softMen-2-li-1') != null) {
                                                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-1']])->update(['body' => Input::get('1-softMen-2-li-1')]);
                                                    if (Input::get('1-softMen-2-li-2') != null) {
                                                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-2']])->update(['body' => Input::get('1-softMen-2-li-2')]);
                                                        if (Input::get('1-softMen-2-li-3') != null) {
                                                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-3']])->update(['body' => Input::get('1-softMen-2-li-3')]);
                                                            if (Input::get('1-softMen-2-li-4') != null) {
                                                                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-4']])->update(['body' => Input::get('1-softMen-2-li-4')]);
                                                                if ($request->hasFile('1-softMen-2-img-1')) {
                                                                    $img = $request->file('1-softMen-2-img-1');

                                                                    $filename = time() . '.' . $img->getClientOriginalExtension();
                                                                    $location = public_path('img/production/' . $filename);
                                                                    $dataLocation = 'img/production/' . $filename;
                                                                    Image::make($img)->save($location);

                                                                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-img']])->update(['body' => $dataLocation]);
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
            } elseif (Input::get('1-softMen-1-h2-1') != null) {
                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-2-h1']])->update(['body' => Input::get('1-softMen-1-h2-1')]);
                if (Input::get('1-softMen-1-p-1') != null) {
                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-2-p']])->update(['body' => Input::get('1-softMen-1-p-1')]);
                    if (Input::get('1-softMen-1-li-1') != null) {
                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-2-li-1']])->update(['body' => Input::get('1-softMen-1-li-1')]);
                        if (Input::get('1-softMen-1-li-2') != null) {
                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-2-li-2']])->update(['body' => Input::get('1-softMen-1-li-2')]);
                            if (Input::get('1-softMen-1-li-3') != null) {
                                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-2-li-3']])->update(['body' => Input::get('1-softMen-1-li-3')]);
                                if (Input::get('1-softMen-1-li-4') != null) {
                                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-2-li-4']])->update(['body' => Input::get('1-softMen-1-li-4')]);
                                    if (Input::get('1-softMen-2-h2-1') != null) {
                                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-h1']])->update(['body' => Input::get('1-softMen-2-h2-1')]);
                                        if (Input::get('1-softMen-2-p-1') != null) {
                                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-p']])->update(['body' => Input::get('1-softMen-2-p-1')]);
                                            if (Input::get('1-softMen-2-li-1') != null) {
                                                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-1']])->update(['body' => Input::get('1-softMen-2-li-1')]);
                                                if (Input::get('1-softMen-2-li-2') != null) {
                                                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-2']])->update(['body' => Input::get('1-softMen-2-li-2')]);
                                                    if (Input::get('1-softMen-2-li-3') != null) {
                                                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-3']])->update(['body' => Input::get('1-softMen-2-li-3')]);
                                                        if (Input::get('1-softMen-2-li-4') != null) {
                                                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-4']])->update(['body' => Input::get('1-softMen-2-li-4')]);
                                                            if ($request->hasFile('1-softMen-2-img-1')) {
                                                                $img = $request->file('1-softMen-2-img-1');

                                                                $filename = time() . '.' . $img->getClientOriginalExtension();
                                                                $location = public_path('img/production/' . $filename);
                                                                $dataLocation = 'img/production/' . $filename;
                                                                Image::make($img)->save($location);

                                                                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-img']])->update(['body' => $dataLocation]);
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
            } elseif (Input::get('1-softMen-1-p-1') != null) {
                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-2-p']])->update(['body' => Input::get('1-softMen-1-p-1')]);
                if (Input::get('1-softMen-1-li-1') != null) {
                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-2-li-1']])->update(['body' => Input::get('1-softMen-1-li-1')]);
                    if (Input::get('1-softMen-1-li-2') != null) {
                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-2-li-2']])->update(['body' => Input::get('1-softMen-1-li-2')]);
                        if (Input::get('1-softMen-1-li-3') != null) {
                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-2-li-3']])->update(['body' => Input::get('1-softMen-1-li-3')]);
                            if (Input::get('1-softMen-1-li-4') != null) {
                                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-2-li-4']])->update(['body' => Input::get('1-softMen-1-li-4')]);
                                if (Input::get('1-softMen-2-h2-1') != null) {
                                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-h1']])->update(['body' => Input::get('1-softMen-2-h2-1')]);
                                    if (Input::get('1-softMen-2-p-1') != null) {
                                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-p']])->update(['body' => Input::get('1-softMen-2-p-1')]);
                                        if (Input::get('1-softMen-2-li-1') != null) {
                                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-1']])->update(['body' => Input::get('1-softMen-2-li-1')]);
                                            if (Input::get('1-softMen-2-li-2') != null) {
                                                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-2']])->update(['body' => Input::get('1-softMen-2-li-2')]);
                                                if (Input::get('1-softMen-2-li-3') != null) {
                                                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-3']])->update(['body' => Input::get('1-softMen-2-li-3')]);
                                                    if (Input::get('1-softMen-2-li-4') != null) {
                                                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-4']])->update(['body' => Input::get('1-softMen-2-li-4')]);
                                                        if ($request->hasFile('1-softMen-2-img-1')) {
                                                            $img = $request->file('1-softMen-2-img-1');

                                                            $filename = time() . '.' . $img->getClientOriginalExtension();
                                                            $location = public_path('img/production/' . $filename);
                                                            $dataLocation = 'img/production/' . $filename;
                                                            Image::make($img)->save($location);

                                                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-img']])->update(['body' => $dataLocation]);
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
            } elseif (Input::get('1-softMen-1-li-1') != null) {
                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-2-li-1']])->update(['body' => Input::get('1-softMen-1-li-1')]);
                if (Input::get('1-softMen-1-li-2') != null) {
                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-2-li-2']])->update(['body' => Input::get('1-softMen-1-li-2')]);
                    if (Input::get('1-softMen-1-li-3') != null) {
                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-2-li-3']])->update(['body' => Input::get('1-softMen-1-li-3')]);
                        if (Input::get('1-softMen-1-li-4') != null) {
                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-2-li-4']])->update(['body' => Input::get('1-softMen-1-li-4')]);
                            if (Input::get('1-softMen-2-h2-1') != null) {
                                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-h1']])->update(['body' => Input::get('1-softMen-2-h2-1')]);
                                if (Input::get('1-softMen-2-p-1') != null) {
                                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-p']])->update(['body' => Input::get('1-softMen-2-p-1')]);
                                    if (Input::get('1-softMen-2-li-1') != null) {
                                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-1']])->update(['body' => Input::get('1-softMen-2-li-1')]);
                                        if (Input::get('1-softMen-2-li-2') != null) {
                                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-2']])->update(['body' => Input::get('1-softMen-2-li-2')]);
                                            if (Input::get('1-softMen-2-li-3') != null) {
                                                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-3']])->update(['body' => Input::get('1-softMen-2-li-3')]);
                                                if (Input::get('1-softMen-2-li-4') != null) {
                                                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-4']])->update(['body' => Input::get('1-softMen-2-li-4')]);
                                                    if ($request->hasFile('1-softMen-2-img-1')) {
                                                        $img = $request->file('1-softMen-2-img-1');

                                                        $filename = time() . '.' . $img->getClientOriginalExtension();
                                                        $location = public_path('img/production/' . $filename);
                                                        $dataLocation = 'img/production/' . $filename;
                                                        Image::make($img)->save($location);

                                                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-img']])->update(['body' => $dataLocation]);
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
            } elseif (Input::get('1-softMen-1-li-2') != null) {
                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-2-li-2']])->update(['body' => Input::get('1-softMen-1-li-2')]);
                if (Input::get('1-softMen-1-li-3') != null) {
                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-2-li-3']])->update(['body' => Input::get('1-softMen-1-li-3')]);
                    if (Input::get('1-softMen-1-li-4') != null) {
                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-2-li-4']])->update(['body' => Input::get('1-softMen-1-li-4')]);
                        if (Input::get('1-softMen-2-h2-1') != null) {
                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-h1']])->update(['body' => Input::get('1-softMen-2-h2-1')]);
                            if (Input::get('1-softMen-2-p-1') != null) {
                                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-p']])->update(['body' => Input::get('1-softMen-2-p-1')]);
                                if (Input::get('1-softMen-2-li-1') != null) {
                                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-1']])->update(['body' => Input::get('1-softMen-2-li-1')]);
                                    if (Input::get('1-softMen-2-li-2') != null) {
                                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-2']])->update(['body' => Input::get('1-softMen-2-li-2')]);
                                        if (Input::get('1-softMen-2-li-3') != null) {
                                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-3']])->update(['body' => Input::get('1-softMen-2-li-3')]);
                                            if (Input::get('1-softMen-2-li-4') != null) {
                                                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-4']])->update(['body' => Input::get('1-softMen-2-li-4')]);
                                                if ($request->hasFile('1-softMen-2-img-1')) {
                                                    $img = $request->file('1-softMen-2-img-1');

                                                    $filename = time() . '.' . $img->getClientOriginalExtension();
                                                    $location = public_path('img/production/' . $filename);
                                                    $dataLocation = 'img/production/' . $filename;
                                                    Image::make($img)->save($location);

                                                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-img']])->update(['body' => $dataLocation]);
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif (Input::get('1-softMen-1-li-3') != null) {
                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-2-li-3']])->update(['body' => Input::get('1-softMen-1-li-3')]);
                if (Input::get('1-softMen-1-li-4') != null) {
                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-2-li-4']])->update(['body' => Input::get('1-softMen-1-li-4')]);
                    if (Input::get('1-softMen-2-h2-1') != null) {
                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-h1']])->update(['body' => Input::get('1-softMen-2-h2-1')]);
                        if (Input::get('1-softMen-2-p-1') != null) {
                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-p']])->update(['body' => Input::get('1-softMen-2-p-1')]);
                            if (Input::get('1-softMen-2-li-1') != null) {
                                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-1']])->update(['body' => Input::get('1-softMen-2-li-1')]);
                                if (Input::get('1-softMen-2-li-2') != null) {
                                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-2']])->update(['body' => Input::get('1-softMen-2-li-2')]);
                                    if (Input::get('1-softMen-2-li-3') != null) {
                                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-3']])->update(['body' => Input::get('1-softMen-2-li-3')]);
                                        if (Input::get('1-softMen-2-li-4') != null) {
                                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-4']])->update(['body' => Input::get('1-softMen-2-li-4')]);
                                            if ($request->hasFile('1-softMen-2-img-1')) {
                                                $img = $request->file('1-softMen-2-img-1');

                                                $filename = time() . '.' . $img->getClientOriginalExtension();
                                                $location = public_path('img/production/' . $filename);
                                                $dataLocation = 'img/production/' . $filename;
                                                Image::make($img)->save($location);

                                                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-img']])->update(['body' => $dataLocation]);
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif (Input::get('1-softMen-1-li-4') != null) {
                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-2-li-4']])->update(['body' => Input::get('1-softMen-1-li-4')]);
                if (Input::get('1-softMen-2-h2-1') != null) {
                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-h1']])->update(['body' => Input::get('1-softMen-2-h2-1')]);
                    if (Input::get('1-softMen-2-p-1') != null) {
                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-p']])->update(['body' => Input::get('1-softMen-2-p-1')]);
                        if (Input::get('1-softMen-2-li-1') != null) {
                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-1']])->update(['body' => Input::get('1-softMen-2-li-1')]);
                            if (Input::get('1-softMen-2-li-2') != null) {
                                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-2']])->update(['body' => Input::get('1-softMen-2-li-2')]);
                                if (Input::get('1-softMen-2-li-3') != null) {
                                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-3']])->update(['body' => Input::get('1-softMen-2-li-3')]);
                                    if (Input::get('1-softMen-2-li-4') != null) {
                                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-4']])->update(['body' => Input::get('1-softMen-2-li-4')]);
                                        if ($request->hasFile('1-softMen-2-img-1')) {
                                            $img = $request->file('1-softMen-2-img-1');

                                            $filename = time() . '.' . $img->getClientOriginalExtension();
                                            $location = public_path('img/production/' . $filename);
                                            $dataLocation = 'img/production/' . $filename;
                                            Image::make($img)->save($location);

                                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-img']])->update(['body' => $dataLocation]);
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif (Input::get('1-softMen-2-h2-1') != null) {
                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-h1']])->update(['body' => Input::get('1-softMen-2-h2-1')]);
                if (Input::get('1-softMen-2-p-1') != null) {
                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-p']])->update(['body' => Input::get('1-softMen-2-p-1')]);
                    if (Input::get('1-softMen-2-li-1') != null) {
                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-1']])->update(['body' => Input::get('1-softMen-2-li-1')]);
                        if (Input::get('1-softMen-2-li-2') != null) {
                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-2']])->update(['body' => Input::get('1-softMen-2-li-2')]);
                            if (Input::get('1-softMen-2-li-3') != null) {
                                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-3']])->update(['body' => Input::get('1-softMen-2-li-3')]);
                                if (Input::get('1-softMen-2-li-4') != null) {
                                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-4']])->update(['body' => Input::get('1-softMen-2-li-4')]);
                                    if ($request->hasFile('1-softMen-2-img-1')) {
                                        $img = $request->file('1-softMen-2-img-1');

                                        $filename = time() . '.' . $img->getClientOriginalExtension();
                                        $location = public_path('img/production/' . $filename);
                                        $dataLocation = 'img/production/' . $filename;
                                        Image::make($img)->save($location);

                                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-img']])->update(['body' => $dataLocation]);
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif (Input::get('1-softMen-2-p-1') != null) {
                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-p']])->update(['body' => Input::get('1-softMen-2-p-1')]);
                if (Input::get('1-softMen-2-li-1') != null) {
                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-1']])->update(['body' => Input::get('1-softMen-2-li-1')]);
                    if (Input::get('1-softMen-2-li-2') != null) {
                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-2']])->update(['body' => Input::get('1-softMen-2-li-2')]);
                        if (Input::get('1-softMen-2-li-3') != null) {
                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-3']])->update(['body' => Input::get('1-softMen-2-li-3')]);
                            if (Input::get('1-softMen-2-li-4') != null) {
                                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-4']])->update(['body' => Input::get('1-softMen-2-li-4')]);
                                if ($request->hasFile('1-softMen-2-img-1')) {
                                    $img = $request->file('1-softMen-2-img-1');

                                    $filename = time() . '.' . $img->getClientOriginalExtension();
                                    $location = public_path('img/production/' . $filename);
                                    $dataLocation = 'img/production/' . $filename;
                                    Image::make($img)->save($location);

                                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-img']])->update(['body' => $dataLocation]);
                                }
                            }
                        }
                    }
                }
            } elseif (Input::get('1-softMen-2-li-1') != null) {
                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-1']])->update(['body' => Input::get('1-softMen-2-li-1')]);
                if (Input::get('1-softMen-2-li-2') != null) {
                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-2']])->update(['body' => Input::get('1-softMen-2-li-2')]);
                    if (Input::get('1-softMen-2-li-3') != null) {
                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-3']])->update(['body' => Input::get('1-softMen-2-li-3')]);
                        if (Input::get('1-softMen-2-li-4') != null) {
                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-4']])->update(['body' => Input::get('1-softMen-2-li-4')]);
                            if ($request->hasFile('1-softMen-2-img-1')) {
                                $img = $request->file('1-softMen-2-img-1');

                                $filename = time() . '.' . $img->getClientOriginalExtension();
                                $location = public_path('img/production/' . $filename);
                                $dataLocation = 'img/production/' . $filename;
                                Image::make($img)->save($location);

                                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-img']])->update(['body' => $dataLocation]);
                            }
                        }
                    }
                }
            } elseif (Input::get('1-softMen-2-li-2') != null) {
                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-2']])->update(['body' => Input::get('1-softMen-2-li-2')]);
                if (Input::get('1-softMen-2-li-3') != null) {
                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-3']])->update(['body' => Input::get('1-softMen-2-li-3')]);
                    if (Input::get('1-softMen-2-li-4') != null) {
                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-4']])->update(['body' => Input::get('1-softMen-2-li-4')]);
                        if ($request->hasFile('1-softMen-2-img-1')) {
                            $img = $request->file('1-softMen-2-img-1');

                            $filename = time() . '.' . $img->getClientOriginalExtension();
                            $location = public_path('img/production/' . $filename);
                            $dataLocation = 'img/production/' . $filename;
                            Image::make($img)->save($location);

                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-img']])->update(['body' => $dataLocation]);
                        }
                    }
                }
            } elseif (Input::get('1-softMen-2-li-3') != null) {
                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-3']])->update(['body' => Input::get('1-softMen-2-li-3')]);
                if (Input::get('1-softMen-2-li-4') != null) {
                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-4']])->update(['body' => Input::get('1-softMen-2-li-4')]);
                    if ($request->hasFile('1-softMen-2-img-1')) {
                        $img = $request->file('1-softMen-2-img-1');

                        $filename = time() . '.' . $img->getClientOriginalExtension();
                        $location = public_path('img/production/' . $filename);
                        $dataLocation = 'img/production/' . $filename;
                        Image::make($img)->save($location);

                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-img']])->update(['body' => $dataLocation]);
                    }
                }
            } elseif (Input::get('1-softMen-2-li-4') != null) {
                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-li-4']])->update(['body' => Input::get('1-softMen-2-li-4')]);
                if ($request->hasFile('1-softMen-2-img-1')) {
                    $img = $request->file('1-softMen-2-img-1');

                    $filename = time() . '.' . $img->getClientOriginalExtension();
                    $location = public_path('img/production/' . $filename);
                    $dataLocation = 'img/production/' . $filename;
                    Image::make($img)->save($location);

                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-img']])->update(['body' => $dataLocation]);
                }
            } elseif ($request->hasFile('1-softMen-2-img-1')) {
                $img = $request->file('1-softMen-2-img-1');

                $filename = time() . '.' . $img->getClientOriginalExtension();
                $location = public_path('img/production/' . $filename);
                $dataLocation = 'img/production/' . $filename;
                Image::make($img)->save($location);

                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-3-3-img']])->update(['body' => $dataLocation]);
            }


            return redirect('dash-tps');
        }
    }

    public function updateSoftDiverse(Request $request) {
        $contents = new Content;

        if (Auth::check()) {

            if (Input::get('1-softDiverse-h1-1') != null) {
                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-4-1-h1']])->update(['body' => Input::get('1-softDiverse-h1-1')]);
                if (Input::get('1-softDiverse-p-1') != null) {
                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-4-1-p']])->update(['body' => Input::get('1-softDiverse-p-1')]);
                    if (Input::get('1-softDiverse-li-1') != null) {
                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-4-1-li-1']])->update(['body' => Input::get('1-softDiverse-li-1')]);
                        if (Input::get('1-softDiverse-li-2') != null) {
                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-4-1-li-2']])->update(['body' => Input::get('1-softDiverse-li-2')]);
                            if (Input::get('1-softDiverse-li-3') != null) {
                                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-4-1-li-3']])->update(['body' => Input::get('1-softDiverse-li-3')]);
                                if (Input::get('1-softDiverse-li-4') != null) {
                                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-4-1-li-4']])->update(['body' => Input::get('1-softDiverse-li-4')]);
                                }
                            }
                        }
                    }
                }
            } elseif (Input::get('1-softDiverse-p-1') != null) {
                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-4-1-p']])->update(['body' => Input::get('1-softDiverse-p-1')]);
                if (Input::get('1-softDiverse-li-1') != null) {
                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-4-1-li-1']])->update(['body' => Input::get('1-softDiverse-li-1')]);
                    if (Input::get('1-softDiverse-li-2') != null) {
                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-4-1-li-2']])->update(['body' => Input::get('1-softDiverse-li-2')]);
                        if (Input::get('1-softDiverse-li-3') != null) {
                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-4-1-li-3']])->update(['body' => Input::get('1-softDiverse-li-3')]);
                            if (Input::get('1-softDiverse-li-4') != null) {
                                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-4-1-li-4']])->update(['body' => Input::get('1-softDiverse-li-4')]);
                            }
                        }
                    }
                }
            } elseif (Input::get('1-softDiverse-li-1') != null) {
                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-4-1-li-1']])->update(['body' => Input::get('1-softDiverse-li-1')]);
                if (Input::get('1-softDiverse-li-2') != null) {
                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-4-1-li-2']])->update(['body' => Input::get('1-softDiverse-li-2')]);
                    if (Input::get('1-softDiverse-li-3') != null) {
                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-4-1-li-3']])->update(['body' => Input::get('1-softDiverse-li-3')]);
                        if (Input::get('1-softDiverse-li-4') != null) {
                            $contents->where([['pages_id', '=', '5'], ['section', '=', '5-4-1-li-4']])->update(['body' => Input::get('1-softDiverse-li-4')]);
                        }
                    }
                }
            } elseif (Input::get('1-softDiverse-li-2') != null) {
                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-4-1-li-2']])->update(['body' => Input::get('1-softDiverse-li-2')]);
                if (Input::get('1-softDiverse-li-3') != null) {
                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-4-1-li-3']])->update(['body' => Input::get('1-softDiverse-li-3')]);
                    if (Input::get('1-softDiverse-li-4') != null) {
                        $contents->where([['pages_id', '=', '5'], ['section', '=', '5-4-1-li-4']])->update(['body' => Input::get('1-softDiverse-li-4')]);
                    }
                }
            } elseif (Input::get('1-softDiverse-li-3') != null) {
                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-4-1-li-3']])->update(['body' => Input::get('1-softDiverse-li-3')]);
                if (Input::get('1-softDiverse-li-4') != null) {
                    $contents->where([['pages_id', '=', '5'], ['section', '=', '5-4-1-li-4']])->update(['body' => Input::get('1-softDiverse-li-4')]);
                }
            } elseif (Input::get('1-softDiverse-li-4') != null) {
                $contents->where([['pages_id', '=', '5'], ['section', '=', '5-4-1-li-4']])->update(['body' => Input::get('1-softDiverse-li-4')]);
            }
            return redirect('dash-tps');
        }
    }

}
