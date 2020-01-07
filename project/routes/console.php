<?php

use App\Caregiver;
use App\Mail\LicenseExpiring;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/


/**
 * List all skilled nurse license details.
 */
Artisan::command('licenses:list', function () {
    $headers = ['License Owner', 'License Expiry Date'];
    $caregivers = [
        ['Rosalind Johnston', '2020-01-13'],
        ['Celestino Brekke', '2020-01-15'],
        ['Willie Conroy', '2020-01-18'],
    ];

    $this->table($headers, $caregivers);

})->describe('List all skilled nurse license details');


/**
 * Notify nurses with licenses expiring soon.
 */
Artisan::command('licenses:notify-expiring-soon', function () {
    //

    $this->info('Done');

})->describe('Notify nurses with licenses expiring soon');
