<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Article;
use App\Models\Gallery;
use App\Models\Setting;


class LandingController extends Controller
{
    public function landing()
{
    $products = Product::all();
    $articles = Article::all();
    $galleries = Gallery::all();
    $settings = Setting::first(); 

    return view('landing', compact('products', 'articles', 'galleries', 'settings'));
}
    public function profile()
{
        $settings = Setting::first();     // ambil data setting
        return view('profile.profile_lengkap', compact('settings'));
}


}
