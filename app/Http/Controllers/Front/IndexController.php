<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    public function index(){
        if (Session::get('locale') ==null) {
            Session::put('locale', 'en');
        }
        App::setLocale(Session::get('locale'));
        $abouts = About::all();
        return view('front.index' , compact('abouts'));
    }
}
