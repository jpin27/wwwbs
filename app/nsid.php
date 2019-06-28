<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nsid extends Role
{
    // sets the relationship between an appointment and a user: an nsid can be assigned to many appointments
    public function appointments()
	{
  		return $this->belongsToMany(Appointment::class);
	}
}
