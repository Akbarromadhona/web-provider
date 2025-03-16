<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('dashboard.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('dashboard.articles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $article = new Article($request->all());

        if ($request->hasFile('image')) {
            $article->image = $request->file('image')->store('articles');
        }

        $article->save();

        return redirect()->route('articles.index')->with('success', 'Artikel berhasil ditambahkan.');
    }

    public function edit(Article $article)
    {
        return view('dashboard.articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $article->update($request->all());

        if ($request->hasFile('image')) {
            $article->image = $request->file('image')->store('articles');
            $article->save();
        }

        return redirect()->route('articles.index')->with('success', 'Artikel berhasil diperbarui.');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index')->with('success', 'Artikel berhasil dihapus.');
    }
}
