<?php

namespace App\Http\Controllers;

use App\Models\Grache;
use App\Models\places;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function booking()
    {
        $graches = Grache::all();
        $places = places::all();
        return view('booking', compact('graches', 'places'));
    }
    public function home()
    {
        $graches = Grache::all();
        return view('home', compact('graches'));
    }
}
