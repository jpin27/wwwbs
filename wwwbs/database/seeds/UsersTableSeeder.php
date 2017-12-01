<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	// start with a fresh db
    	DB::table('users')->delete();

	    /*
	     / FUCK IT. Hardcode the role assignments for this database seeder. 
	     / Fuck everything I'm done staring at this code for 2 days
		*/

	    /*
	     / TODO: Edit this shit so it only makes one factory call. If time.
	     / TODO: Export this for testing environments by using make() instead of create()
	    */

        // I feel like Dr. Frankenstein at this point. I hope it works.
        // I'm pretty sure it works. It's bound to work. 

	    // I hope I get this syntax. Create 12 doctors.
	    // For each doctor, attach the 'doctor' role from the Role table.
	    // Eloquent is fun! 
	    factory(App\User::class, 12)->states('doctor')->create()->each(function ($u) {
        	$u->roles()->attach(
        		Role::where('name', 'doctor')->first()
        	);
    	});

	    // Create 50 patients
	    factory(App\User::class, 50)->states('patient')->create()->each(function ($u) {
        	$u->roles()->attach(
        		Role::where('name', 'patient')->first()
        	);
    	});

	    // Create 6 staff. No states are declared because this is handled by the
	    // roles table
	    factory(App\User::class, 6)->create()->each(function ($u) {
        	$u->roles()->attach(
        		Role::where('name', 'staff')->first()
        	);
    	});

	    // Create 2 admin
	    factory(App\User::class, 2)->create()->each(function ($u) {
        	$u->roles()->attach(
        		Role::where('name', 'admin')->first()
        	);
    	});

    }
}
