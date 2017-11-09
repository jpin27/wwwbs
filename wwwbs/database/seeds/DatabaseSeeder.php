<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

    	// Call the seeds to seed the database
    	$this->call([
        	PatientsTableSeeder::class,
        	DoctorsTableSeeder::class,
        	AppointmentsTableSeeder::class,
    	]);

    }
}
