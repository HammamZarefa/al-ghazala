<?php

namespace App\Http\Controllers\Languages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function changeLang(Request $request,$locale){

        // $request->session()->put('local',$local);
        // dd($request->session());
        // return back();

        if (!in_array($locale, config('app.languages'))){
            $locale = 'en';
        }
        Session::put('locale', $locale);
        return redirect()->back();
    }
}
