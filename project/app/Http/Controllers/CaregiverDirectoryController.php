<?php

namespace App\Http\Controllers;

class CaregiverDirectoryController extends Controller
{
    /**
     * Display the caregiver directory.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return view('caregivers-directory');
    }
}
