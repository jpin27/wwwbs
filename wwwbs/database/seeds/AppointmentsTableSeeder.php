<?php

use Illuminate\Database\Seeder;

class AppointmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	// start with a fresh db
    	DB::table('appointments')->delete();

        factory(App\Appointment::class, 8)->create();    
    }
}
