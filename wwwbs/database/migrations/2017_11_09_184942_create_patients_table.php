<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');

            // TODO: Find out what the fuck is all that $fillable[] shit is about

            // TODO: declare the foreign keys
            // maybe this is handled by Eloquent?

            // declare the table columns 
            $table->string('nsid');
            $table->string('firstName');
            $table->string('lastName');
            $table->bigInteger('healthNumber');
            $table->date('birthDate');
            $table->text('address');

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
        Schema::dropIfExists('patients');
    }
}
