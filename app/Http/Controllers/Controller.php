<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Config;
use Spatie\Translatable\HasTranslations;

class Controller extends BaseController
{
    use HasTranslations;
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getlanguages()
    {
         return Config::get('app.languages');
    }

}

