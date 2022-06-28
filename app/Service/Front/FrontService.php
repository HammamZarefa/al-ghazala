<?php

namespace App\Service\Front;

use App\Manager\Front\FrontManager;
use Illuminate\Http\Request;

class FrontService
{
    private $frontManager;
    public function __construct(FrontManager $frontManager)
    {
        $this->frontManager=$frontManager;
    }
    public function home()
    {
        return $this->frontManager->home();
    }

    public function about()
    {
        return $this->frontManager->about();
    }

    public function testi()
    {
        return $this->frontManager->testi();
    }
    public function service()
    {
        return $this->frontManager->service();
    }

    public function serviceshow($slug)
    {
        return $this->frontManager->serviceshow($slug);
    }

    public function portfolio()
    {
        return $this->frontManager->portfolio();
    }

    public function portfolioshow($slug)
    {
        return $this->frontManager->portfolioshow($slug);
    }

    public function blog()
    {
        return $this->frontManager->blog();
    }

    public function blogshow($slug)
    {
        return $this->frontManager->home($slug);
    }

    public function category($category)
    {
        return $this->frontManager->category($category);
    }

    public function tag($tag)
    {
        return $this->frontManager->tag($tag);
    }

    public function search()
    {
        return $this->frontManager->search();
    }

    public function page($slug)
    {
        return $this->frontManager->page($slug);        
    }

    public function subscribe(Request $request)
    {
        return $this->frontManager->subscribe($request);
    }
}