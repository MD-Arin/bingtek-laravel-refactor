<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Content;
use Illuminate\Support\Facades\Auth;

class DashFooterController extends Controller {

    public function updateFooterLocation(Request $request) {
        $content = new Content;

        if (Auth::check()) {
            if (Input::get('1-footerLocation-li-1') != null) {
                $content->where([['pages_id', '=', '7'], ['section', '=', '7-1-1-li-1']])->update(['body' => Input::get('1-footerLocation-li-1')]);
                if (Input::get('1-footerLocation-li-2') != null) {
                    $content->where([['pages_id', '=', '7'], ['section', '=', '7-1-1-li-2']])->update(['body' => Input::get('1-footerLocation-li-2')]);
                    if (Input::get('1-footerLocation-li-3') != null) {
                        $content->where([['pages_id', '=', '7'], ['section', '=', '7-1-1-li-3']])->update(['body' => Input::get('1-footerLocation-li-3')]);
                        if (Input::get('1-footerLocation-li-4') != null) {
                            $content->where([['pages_id', '=', '7'], ['section', '=', '7-1-1-li-4']])->update(['body' => Input::get('1-footerLocation-li-4')]);
                            if (Input::get('1-footerLocation-li-5') != null) {
                                $content->where([['pages_id', '=', '7'], ['section', '=', '7-1-1-li-5']])->update(['body' => Input::get('1-footerLocation-li-5')]);
                                if (Input::get('1-footerLocation-facebook') != null) {
                                    $content->where([['pages_id', '=', '7'], ['section', '=', '7-1-2-i-1']])->update(['body' => Input::get('1-footerLocation-facebook')]);
                                    if (Input::get('1-footerLocation-twitter') != null) {
                                        $content->where([['pages_id', '=', '7'], ['section', '=', '7-1-2-i-2']])->update(['body' => Input::get('1-footerLocation-twitter')]);
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif (Input::get('1-footerLocation-li-2') != null) {
                $content->where([['pages_id', '=', '7'], ['section', '=', '7-1-1-li-2']])->update(['body' => Input::get('1-footerLocation-li-2')]);
                if (Input::get('1-footerLocation-li-3') != null) {
                    $content->where([['pages_id', '=', '7'], ['section', '=', '7-1-1-li-3']])->update(['body' => Input::get('1-footerLocation-li-3')]);
                    if (Input::get('1-footerLocation-li-4') != null) {
                        $content->where([['pages_id', '=', '7'], ['section', '=', '7-1-1-li-4']])->update(['body' => Input::get('1-footerLocation-li-4')]);
                        if (Input::get('1-footerLocation-li-5') != null) {
                            $content->where([['pages_id', '=', '7'], ['section', '=', '7-1-1-li-5']])->update(['body' => Input::get('1-footerLocation-li-5')]);
                            if (Input::get('1-footerLocation-facebook') != null) {
                                $content->where([['pages_id', '=', '7'], ['section', '=', '7-1-2-i-1']])->update(['body' => Input::get('1-footerLocation-facebook')]);
                                if (Input::get('1-footerLocation-twitter') != null) {
                                    $content->where([['pages_id', '=', '7'], ['section', '=', '7-1-2-i-2']])->update(['body' => Input::get('1-footerLocation-twitter')]);
                                }
                            }
                        }
                    }
                }
            } elseif (Input::get('1-footerLocation-li-3') != null) {
                $content->where([['pages_id', '=', '7'], ['section', '=', '7-1-1-li-3']])->update(['body' => Input::get('1-footerLocation-li-3')]);
                if (Input::get('1-footerLocation-li-4') != null) {
                    $content->where([['pages_id', '=', '7'], ['section', '=', '7-1-1-li-4']])->update(['body' => Input::get('1-footerLocation-li-4')]);
                    if (Input::get('1-footerLocation-li-5') != null) {
                        $content->where([['pages_id', '=', '7'], ['section', '=', '7-1-1-li-5']])->update(['body' => Input::get('1-footerLocation-li-5')]);
                        if (Input::get('1-footerLocation-facebook') != null) {
                            $content->where([['pages_id', '=', '7'], ['section', '=', '7-1-2-i-1']])->update(['body' => Input::get('1-footerLocation-facebook')]);
                            if (Input::get('1-footerLocation-twitter') != null) {
                                $content->where([['pages_id', '=', '7'], ['section', '=', '7-1-2-i-2']])->update(['body' => Input::get('1-footerLocation-twitter')]);
                            }
                        }
                    }
                }
            } elseif (Input::get('1-footerLocation-li-4') != null) {
                $content->where([['pages_id', '=', '7'], ['section', '=', '7-1-1-li-4']])->update(['body' => Input::get('1-footerLocation-li-4')]);
                if (Input::get('1-footerLocation-li-5') != null) {
                    $content->where([['pages_id', '=', '7'], ['section', '=', '7-1-1-li-5']])->update(['body' => Input::get('1-footerLocation-li-5')]);
                    if (Input::get('1-footerLocation-facebook') != null) {
                        $content->where([['pages_id', '=', '7'], ['section', '=', '7-1-2-i-1']])->update(['body' => Input::get('1-footerLocation-facebook')]);
                        if (Input::get('1-footerLocation-twitter') != null) {
                            $content->where([['pages_id', '=', '7'], ['section', '=', '7-1-2-i-2']])->update(['body' => Input::get('1-footerLocation-twitter')]);
                        }
                    }
                }
            } elseif (Input::get('1-footerLocation-li-5') != null) {
                $content->where([['pages_id', '=', '7'], ['section', '=', '7-1-1-li-5']])->update(['body' => Input::get('1-footerLocation-li-5')]);
                if (Input::get('1-footerLocation-facebook') != null) {
                    $content->where([['pages_id', '=', '7'], ['section', '=', '7-1-2-i-1']])->update(['body' => Input::get('1-footerLocation-facebook')]);
                    if (Input::get('1-footerLocation-twitter') != null) {
                        $content->where([['pages_id', '=', '7'], ['section', '=', '7-1-2-i-2']])->update(['body' => Input::get('1-footerLocation-twitter')]);
                    }
                }
            } elseif (Input::get('1-footerLocation-facebook') != null) {
                $content->where([['pages_id', '=', '7'], ['section', '=', '7-1-2-i-1']])->update(['body' => Input::get('1-footerLocation-facebook')]);
                if (Input::get('1-footerLocation-twitter') != null) {
                    $content->where([['pages_id', '=', '7'], ['section', '=', '7-1-2-i-2']])->update(['body' => Input::get('1-footerLocation-twitter')]);
                }
            } elseif (Input::get('1-footerLocation-twitter') != null) {
                $content->where([['pages_id', '=', '7'], ['section', '=', '7-1-2-i-2']])->update(['body' => Input::get('1-footerLocation-twitter')]);
            }

            return redirect('dash-footer');
        }
    }

    public function updateFooterMobile(Request $request) {
        $content = new Content;

        if (Auth::check()) {
            if (Input::get('1-footerMobile-1') != null) {
                $content->where([['pages_id', '=', '7'], ['section', '=', '7-2-1-p-1']])->update(['body' => Input::get('1-footerMobile-1')]);
                if (Input::get('1-footerMobile-2') != null) {
                    $content->where([['pages_id', '=', '7'], ['section', '=', '7-2-1-p-2']])->update(['body' => Input::get('1-footerMobile-2')]);
                    if (Input::get('1-footerMobile-3') != null) {
                        $content->where([['pages_id', '=', '7'], ['section', '=', '7-2-1-p-3']])->update(['body' => Input::get('1-footerMobile-3')]);
                    }
                }
            } elseif (Input::get('1-footerMobile-2') != null) {
                $content->where([['pages_id', '=', '7'], ['section', '=', '7-2-1-p-2']])->update(['body' => Input::get('1-footerMobile-2')]);
                if (Input::get('1-footerMobile-3') != null) {
                    $content->where([['pages_id', '=', '7'], ['section', '=', '7-2-1-p-3']])->update(['body' => Input::get('1-footerMobile-3')]);
                }
            } elseif (Input::get('1-footerMobile-3') != null) {
                $content->where([['pages_id', '=', '7'], ['section', '=', '7-2-1-p-3']])->update(['body' => Input::get('1-footerMobile-3')]);
            }
            return redirect('dash-footer');
        }
    }

}
