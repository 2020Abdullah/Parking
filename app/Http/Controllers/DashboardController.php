<?php

namespace App\Http\Controllers;

use App\Models\Grache;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $graches_count = Grache::count();
        return view('dashboard', compact('graches_count'));
    }
}
