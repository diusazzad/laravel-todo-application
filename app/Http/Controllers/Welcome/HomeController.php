<?php

namespace App\Http\Controllers\Welcome;

use App\Http\Controllers\Controller;
use App\Models\Welcome\Feature;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $features = Feature::all();
        return view('welcome')->with('features', $features);
    }

    public function featureForm(){
        return view('home.feature.form');
    }
    public function featureFormSave(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        Feature::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image_url' => asset('storage/' . $imagePath),
        ]);

        return redirect()->back()->with('success', 'Feature added successfully!');
    }
}
