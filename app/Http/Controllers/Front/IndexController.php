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
        $asc = floor($abouts->count() / 2);
        $desc = $abouts->count() - $asc;
        $about1 = About::orderBy('id', 'desc')->limit($desc)->get();
        $about2 = About::limit($asc)->get();
        return view('front.index' , compact('about1','about2'));
    }
}
