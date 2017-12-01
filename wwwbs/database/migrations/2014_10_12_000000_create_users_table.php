<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');


            $table->string('firstName');
            $table->string('lastName');
            $table->string('email')->unique();
            $table->string('password');

            // declare the table columns
            $table->string('subRole')->nullable();

            // declare the table columns
            // for patients

            // TODO: I had to disable strict MySQL. Find out a way to have NULL columns
            // even with strict turned on.
            $table->string('nsid')->nullable();
            $table->bigInteger('healthNumber')->nullable();
            $table->date('birthDate')->nullable();
            $table->text('address')->nullable();


            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
