<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{

    /**
     * The attributes that are mass assignable.
     * This protects from mass assignment vulnerabilities and such
     * @var array
     */
    protected $fillable = [
        'doctor_id', 'date', 'time', 'brief_desc', 'full_desc',
        'completed', 'cancelled', 'nsid',
    ];

    // This links the Appointments table with the Users table - a User can have many Appointments
    public function nsid()
    {
        return $this->belongsToMany(nsid::class);
    }

	// This links the Appointments table with the Users table - a User (doctor) can have many Appointments
    public function doctor_id()
    {
        return $this->belongsToMany(doctor_id::class);
    }




}
