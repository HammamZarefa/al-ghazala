<?php

namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;

interface FrontRepositoryInterface{

    public function home();

    public function about();

    public function team();

    public function testi();

    public function service();

    public function serviceshow($slug);

    public function portfolio();

    public function portfolioshow($slug);

    public function blog();

    public function blogshow($slug);

    public function category();

    public function categoryshow($slug);

    public function tag();

    public function search();

    public function page();

    public function pageshow($slug);

    public function subscribe(Request $request);

}
