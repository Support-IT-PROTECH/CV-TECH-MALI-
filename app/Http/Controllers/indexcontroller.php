<?php

namespace App\Http\Controllers;

use App\Models\Entreprise_2;
use App\Models\Profile;
use Illuminate\Http\Request;

class indexcontroller extends Controller
{
    public function index()
    {
        $profile = Profile::latest()->paginate(4);
        $entreprise = Entreprise_2::latest()->paginate(3);
        return view('index', compact('profile', 'entreprise'));
    }
}
