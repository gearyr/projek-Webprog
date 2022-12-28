<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function viewMovie()
    {
        return view('movie');
    }

    public function showAddMovie()
    {
        return view('addmovie');
    }

    public function addMovie(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255|unique:users',
            'description' => 'required|email|unique:users',
            'genre' => 'required'
        ]);
        $validated['password'] = bcrypt($validated['password']);
        User::create($validated);

        return redirect('login');
    }
}
