<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\places;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    public function index()
    {
        $Tickets = Booking::all();
        return view('Tickets.index', compact('Tickets'));
    }
    public function getPlaces(Request $request)
    {
        $Grache_id = $request->Grache_id;
        $places = places::where('grache_id', $Grache_id)->get();
        return response()->json($places);
    }
    public function store(Request $request)
    {
        $code = rand(1, 100000);

        $fullName = $request->fullName;
        $phone = $request->phone;
        $date = $request->date;
        $time = $request->time;
        $notes = $request->notes;
        $place_id = $request->place_id;

        $validator = Validator::make($request->all(), [
            'fullName' => 'required',
            'phone'    => 'required',
            'place_id' => 'required',
        ]);

        if ($validator->fails()) {
            toastr()->error('Please make sure that all fields are filled out', 'Failed');
            return back();
        }

        $check_place_available = places::where('id', $place_id)->pluck('status')->first();

        if ($check_place_available == 1) {
            toastr()->error('This place is already booked');
            return back();
        } else {
            Booking::create([
                'code' => $code,
                'fullName' => $fullName,
                'phone' => $phone,
                'date' => $date,
                'time' => $time,
                'notes' => $notes,
                'place_id' => $place_id,
                'status' => 1,
            ]);

            $place = places::where('id', $place_id);

            $place->update([
                'status' => 1
            ]);
        }

        return redirect()->route('ticket.data');
    }
}
