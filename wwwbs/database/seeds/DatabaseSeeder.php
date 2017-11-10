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

    	// SUMMON THE SEEDS
    	$this->call([
        	PatientsTableSeeder::class,
        	DoctorsTableSeeder::class,
        	AppointmentsTableSeeder::class,
    	]);

    }
}
