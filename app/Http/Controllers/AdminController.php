<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Gallery;
use App\Models\Product;


use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $products = Product::count();
        $articles = Article::count();
        $galleries = Gallery::count();
        return view('admin.dashboard', compact('products', 'articles', 'galleries')) ;
    }
}
