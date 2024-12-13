<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class indexcontroller extends Controller
{
    public function index()
    {
        $profile = Profile::latest()->paginate(4);
        return view('index', compact('profile'));
    }
}
