<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class QrCodeController extends Controller
{
    public function index()
    {
        $last_ticket = Booking::latest('id')->first();
        return view('ticket', compact('last_ticket'));
    }
}
