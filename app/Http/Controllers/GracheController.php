<?php

namespace App\Http\Controllers;

use App\Models\Grache;
use Illuminate\Http\Request;

class GracheController extends Controller
{
    public function index()
    {
        $graches = Grache::all();
        return view('Grache.index', compact('graches'));
    }
    public function create()
    {
        return view('Grache.create');
    }
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {

            $file_path = public_path('/images/' . $request->image);

            if (file_exists($file_path)) {
                unlink($file_path);
            }

            $filename = $request->image->getClientOriginalName();

            $request->image->move('images', $filename);
        }

        $grache = new Grache;

        $grache->name = $request->name;
        $grache->places_available = $request->places;
        $grache->addresss = $request->addresss;
        $grache->mobile = $request->mobile;

        if ($filename) {
            $grache->image = $filename;
        }

        $grache->save();

        toastr()->success('Data Created Successfly');

        return redirect()->route('Grache.index');
    }
}
