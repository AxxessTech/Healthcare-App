<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * Get the caregivers for the agency.
     */
    public function caregivers()
    {
        return $this->hasMany(Caregiver::class);
    }
}
