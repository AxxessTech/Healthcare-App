<?php

namespace App\Http\Controllers;

use App\Agency;
use App\Caregiver;
use Illuminate\Http\Request;

class CaregiverController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Agency  $agency
     * @return \Illuminate\Http\Response
     */
    public function create(Agency $agency)
    {
        $positions = config('caregivers.positions');

        return view('caregivers.create', compact('agency', 'positions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Agency  $agency
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Agency $agency)
    {
        //

        return redirect()
            ->route('agencies.show', $agency)
            ->with('status', 'Caregiver created!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Agency  $agency
     * @param  \App\Caregiver  $caregiver
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agency $agency, Caregiver $caregiver)
    {
        //

        return redirect()
            ->route('agencies.show', $agency)
            ->with('status', 'Caregiver deleted!');
    }
}
