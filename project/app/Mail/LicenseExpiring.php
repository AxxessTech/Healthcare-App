<?php

namespace App\Mail;

use App\Caregiver;
use Illuminate\Mail\Mailable;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class LicenseExpiring extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The caregiver who owns the license.
     *
     * @var  App\Caregiver
     */
    public $caregiver;

    /**
     * Create a new message instance.
     *
     * @param  App\Caregiver  $caregiver
     * @return void
     */
    public function __construct(Caregiver $caregiver)
    {
        $this->caregiver = $caregiver;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.license-expiring');
    }
}
