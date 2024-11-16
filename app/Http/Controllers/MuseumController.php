<?php

namespace App\Http\Controllers;

use App\Models\Museum;
use Illuminate\Http\Request;

class MuseumController extends Controller
{
    public function index()
    {
        $museums = Museum::all();
        return view('museums.index', compact('museums'));
    }

    public function create()
    {
        return view('museums.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'address' => 'required',
            'link' => 'required|url',
            'price' => 'required|numeric',
            'image' => 'required|image',
        ]);

        $image = $request->file('image')->store('museums', 'public');
        $imageName = basename($image);

        $museum = Museum::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'address' => $request->input('address'),
            'link' => $request->input('link'),
            'price' => $request->input('price'),
            'image' => $imageName,
        ]);

        return redirect()->route('museums.index')->with('success', 'Музей успешно добавлен!');
    }

    public function show(Museum $museum)
    {
        return view('museums.show', compact('museum'));
    }

    public function edit(Museum $museum)
    {
        return view('museums.edit', compact('museum'));
    }

    public function update(Request $request, Museum $museum)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'address' => 'required',
            'link' => 'required|url',
            'price' => 'required|numeric',
            'image' => 'image',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('museums', 'public');
            $imageName = basename($image);
            $museum->image = $imageName;
        }

        $museum->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'address' => $request->input('address'),
            'link' => $request->input('link'),
            'price' => $request->input('price'),
        ]);

        return redirect()->route('museums.index')->with('success', 'Музей успешно обновлен!');
    }

    public function destroy(Museum $museum)
    {
        $museum->delete();
        return redirect()->route('museums.index')->with('success', 'Музей успешно удален!');
    }
}
