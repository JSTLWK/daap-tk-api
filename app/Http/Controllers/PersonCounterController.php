<?php

namespace App\Http\Controllers;

use App\Models\PersonCounter;
use Illuminate\Http\Request;

class PersonCounterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'persons' => PersonCounter::orderBy('team_kills', 'DESC')->get(),
        ]);
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PersonCounter $personCounter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PersonCounter $personCounter)
    {
        $personCounter->team_kills = $personCounter->team_kills + 1;
        $personCounter->save();

        return response()->json([
            'persons' => PersonCounter::orderBy('team_kills', 'DESC')->get(),
        ]);
    }
}
