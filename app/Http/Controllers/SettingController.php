<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::all();
        return view('dashboard.settings.index', compact('settings'));
    }

    public function create()
    {
        return view('dashboard.settings.create');
    }

    public function store(Request $request)
    {
        Setting::create($request->all());
        return redirect()->route('settings.index')->with('success', 'Data disimpan!');
    }

    public function edit(Setting $setting)
    {
        return view('dashboard.settings.edit', compact('setting'));
    }

    public function update(Request $request, Setting $setting)
    {
        $setting->update($request->all());
        return redirect()->route('settings.index')->with('success', 'Data diperbarui!');
    }

    public function destroy(Setting $setting)
    {
        $setting->delete();
        return back()->with('success', 'Data dihapus!');
    }
}
