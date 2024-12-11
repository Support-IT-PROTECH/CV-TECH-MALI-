<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use Illuminate\Http\Request;
// Offre

class IndexController extends Controller
{
    public function index()
    {
        $offres = Offre::latest()->paginate(4);
        return view('index', ["offres" => $offres]);
    }
}