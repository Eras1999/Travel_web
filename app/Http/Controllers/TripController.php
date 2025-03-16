<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    public function store(Request $request)
    {
        $trip = new Trip();
        $trip->name = $request->input('name');
        $trip->email = $request->input('email');
        $trip->preferences = $request->input('preferences');
        $trip->save();

        return redirect('/plan-trip')->with('success', 'Trip plan submitted successfully!');
    }
}