<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	// start with a fresh db
    	DB::table('roles')->delete();

        $role_patient = new Role();
   		$role_patient->name = 'patient';
    	$role_patient->description = 'A Student Wellness Centre Patient';
    	$role_patient->save();
    
    	$role_doctor = new Role();
	    $role_doctor->name = 'doctor';
	    $role_doctor->description = 'A practitioner at the SWC. Not necessarily a physician.';
	    $role_doctor->save();

	    $role_staff = new Role();
	    $role_staff->name = 'staff';
	    $role_staff->description = 'An SWC staff - receptionists, lab assistants';
	    $role_staff->save();

	    $role_admin = new Role();
	    $role_admin->name = 'admin';
	    $role_admin->description = 'A SWC system administrator';
	    $role_admin->save();
    }
}
