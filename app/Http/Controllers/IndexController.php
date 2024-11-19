<?php

namespace App\Http\Controllers;

use App\Models\Travail;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index()
    {

        $travails = Travail::get();
        return view("index", ['travails' => $travails]);
    }
}
