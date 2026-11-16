<?php

namespace App\Http\Controllers;

use App\Models\Profile;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::first();
        $profiles = Profile::all();
        return view('home', compact('profile', 'profiles'));
    }
}