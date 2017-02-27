<?php

namespace App\Http\ViewComposers;

use App\Content;
use Illuminate\View\View;

/**
 * The FooterNavComposer Class implemetation
 *
 * @var FooterNavComposer
 */
class FooterNavComposer {

    public function __construct() {
        # code...
    }

    public function compose(View $view) {

        $content = new Content;

        //Footer Location
        $footerLocation1li1 = $content->where([['pages_id', '=', '7'], ['section', '=', '7-1-1-li-1']])->value('body');
        $footerLocation1li2 = $content->where([['pages_id', '=', '7'], ['section', '=', '7-1-1-li-2']])->value('body');
        $footerLocation1li3 = $content->where([['pages_id', '=', '7'], ['section', '=', '7-1-1-li-3']])->value('body');
        $footerLocation1li4 = $content->where([['pages_id', '=', '7'], ['section', '=', '7-1-1-li-4']])->value('body');
        $footerLocation1li5 = $content->where([['pages_id', '=', '7'], ['section', '=', '7-1-1-li-5']])->value('body');
        //Footer Social
        $footerSocial1i1 = $content->where([['pages_id', '=', '7'], ['section', '=', '7-1-2-i-1']])->value('body');
        $footerSocial1i2 = $content->where([['pages_id', '=', '7'], ['section', '=', '7-1-2-i-2']])->value('body');
        //Footer Contacts
        $footerContacts1li1 = $content->where([['pages_id', '=', '7'], ['section', '=', '7-2-1-p-1']])->value('body');
        $footerContacts1li2 = $content->where([['pages_id', '=', '7'], ['section', '=', '7-2-1-p-2']])->value('body');
        $footerContacts1li3 = $content->where([['pages_id', '=', '7'], ['section', '=', '7-2-1-p-3']])->value('body');


        //Nav Poroducts
        $navProducts1li1 = $content->where([['pages_id', '=', '8'], ['section', '=', '8-1-1-li-1']])->value('body');
        $navProducts1li2 = $content->where([['pages_id', '=', '8'], ['section', '=', '8-1-1-li-2']])->value('body');
        $navProducts1li3 = $content->where([['pages_id', '=', '8'], ['section', '=', '8-1-1-li-3']])->value('body');
        $navProducts1li4 = $content->where([['pages_id', '=', '8'], ['section', '=', '8-1-1-li-4']])->value('body');

        $view->with([
            //Footer Location
            'footerLocation1li1' => $footerLocation1li1,
            'footerLocation1li2' => $footerLocation1li2,
            'footerLocation1li3' => $footerLocation1li3,
            'footerLocation1li4' => $footerLocation1li4,
            'footerLocation1li5' => $footerLocation1li5,
            //Footer Social
            'footerSocial1i1' => $footerSocial1i1,
            'footerSocial1i2' => $footerSocial1i2,
            //Footer Contacts
            'footerContacts1li1' => $footerContacts1li1,
            'footerContacts1li2' => $footerContacts1li2,
            'footerContacts1li3' => $footerContacts1li3,
            //Nav Poroducts
            'navProducts1li1' => $navProducts1li1,
            'navProducts1li2' => $navProducts1li2,
            'navProducts1li3' => $navProducts1li3,
            'navProducts1li4' => $navProducts1li4
        ]);
    }

}
