<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model, Authenticatable
{

	    use Notifiable;

	    /**
	     * The attributes that are mass assignable.
	     *
	     * @var array
	     */
	    protected $fillable = [
	        'doctor_id', 'date', 'time', 'brief-desc', 'full-desc',
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
