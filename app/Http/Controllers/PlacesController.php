<?php

namespace App\Http\Controllers;

use App\Models\Grache;
use App\Models\places;
use Illuminate\Http\Request;

class PlacesController extends Controller
{
    public function index()
    {
        $places = places::all();
        $graches = Grache::all();
        return view('places.index', compact('places', 'graches'));
    }
    public function store(Request $request)
    {
        $check_place = places::where('name', $request->name)->where('grache_id', $request->grache_id)->exists();

        if ($check_place == 1) {
            toastr()->error('this the Place is Found', 'error');
        } else {

            $place_number = Grache::where('id', $request->grache_id)->pluck('places_available')->first();

            if ($place_number <= 0) {
                toastr()->warning('The places are full', 'warning');
            } else {

                Grache::where('id', $request->grache_id)->decrement('places_available', 1);

                places::create([
                    'name' => $request->name,
                    'grache_id' => $request->grache_id,
                ]);

                toastr()->success('Data Saved Successfly');
            }
        }
        return back();
    }
}
