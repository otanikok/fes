<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setlist;

class SetlistController extends Controller
{
    public function index()
    {
        $setlists = Setlist::all();
        return view('setlists.index', compact('setlists'));
    }

    public function create()
    {
        return view('setlists.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'songs' => 'required|array', // 曲のリストのバリデーション
            'songs.*' => 'required|string|max:255', // 各曲のバリデーション
        ]);

        $setlist = Setlist::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
        ]);

        foreach ($validatedData['songs'] as $song) {
            $setlist->songs()->create(['name' => $song]);
        }

        return redirect('/setlists')->with('success', 'セットリストが登録されました');
    }
}