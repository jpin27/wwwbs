<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{

	/*
	 / TODO: Declare $fillable and $guarded variables to prevent security attacks. Buuut,
	 / we're all Canadian here so I suppose this won't be that much of a problem.
	*/



	/** TODO: DO THIS RELATIONSHIP SHIT
     / Get the doctor that is assigned to the appointment.
     / setup the relationship between Appointment and Doctor: one Appointment has one Doctor
     / TODO: Sacalability - change this so an appointment can have multiple doctors, like for 
     / a severe medical condition in an actual hospital that needs many doctors. For the USask
     / Wellness Centre, this one-to-one relationship will suffice.
    
    public function doctor()
    {
        return $this->belongsTo('App\Doctor');
    }

	// an appointment also belongs to one patient.
    public function patient()
    {
    	return $this->belongsTo('App\Patient');
    }
*/


}
