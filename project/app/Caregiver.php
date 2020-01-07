<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caregiver extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'license_expiration' => 'date:Y-m-d',
    ];

    /**
     * Get the agency that the caregiver belongs to.
     */
    public function agency()
    {
        return $this->belongsTo(Agency::class);
    }
}
