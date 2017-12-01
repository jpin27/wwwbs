<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
	/*
    |--------------------------------------------------------------------------
    | Appointment Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the user appointment as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    /**
     * Where to redirect appointment after registration.
     *
     * @var string
     */
	 // currently going back to the home page
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $appointmentData
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $appointmentData)
    {
        return Validator::make($appointmentData, [
            'doctor_id' => 'required|int|max:11',
            'date' => 'required|string|max:30',
			'time' => 'required|string|max:30',
			'brief-desc' => 'required|string|max:255',
			'full-desc' => 'required|string|max:255',
			'nsid' => 'required|string|max:6|unique:users',
        ]);
    }

    /**
     * Create a new appointment instance after a valid data entry.
     *
     * @param  array  $appointmentData
     * @return \App\Appointment
     */
    protected function create(array $appointmentData)
    {
        return User::create([
            'doctor_id' => $data['doctor_id'],
            'date' => $data['date'],
            'time' => $data['time'],
            'brief-desc' => $data['brief-desc'],
            'full-desc' => $data['full-desc'],
            'nsid' => $data['nsid'],
        ]);


        return $user;
    }
}
