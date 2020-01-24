<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;

class LocationController extends Controller
{
    public function store(Request $request){
        abort_unless(\Gate::allows('location_create'),403);
        $location = Location::create($request->all());  
        return redirect()->route();      
    }
}
