<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

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
            RolesTableSeeder::class,
            UsersTableSeeder::class,
        	AppointmentsTableSeeder::class,
    	]);

    }
}
