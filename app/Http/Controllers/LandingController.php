<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Article;
use App\Models\Gallery;


class LandingController extends Controller
{
    public function landing()
{
    $products = Product::all();
    $articles = Article::all();
    $galleries = Gallery::all();

    return view('landing', compact('products', 'articles', 'galleries'));
}


}
