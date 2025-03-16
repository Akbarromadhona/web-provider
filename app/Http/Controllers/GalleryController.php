<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        return view('dashboard.galleries.index', compact('galleries'));
    }

    public function create()
    {
        return view('dashboard.galleries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|max:2048',
            'description' => 'nullable',
        ]);

        $gallery = new Gallery($request->all());

        if ($request->hasFile('image')) {
            $gallery->image = $request->file('image')->store('galleries');
        }

        $gallery->save();

        return redirect()->route('galleries.index')->with('success', 'Gambar berhasil ditambahkan.');
    }

    public function edit(Gallery $gallery)
    {
        return view('dashboard.galleries.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'nullable|image|max:2048',
            'description' => 'nullable',
        ]);

        $gallery->update($request->all());

        if ($request->hasFile('image')) {
            $gallery->image = $request->file('image')->store('galleries');
            $gallery->save();
        }

        return redirect()->route('galleries.index')->with('success', 'Gambar berhasil diperbarui.');
    }

    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return redirect()->route('galleries.index')->with('success', 'Gambar berhasil dihapus.');
    }
}
