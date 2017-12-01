<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
         / Create the schema for the Appointments table. Laravel is so cool we
         / don't even need to type any kind of SQL to make tables.
        */
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('doctor_id');

            // TODO: Find out what the fuck is all that $fillable[] shit is about

            // TODO: declare the foreign keys
            // maybe this is handled by Eloquent?

            // then declare the table columns
            $table->date('date');
            $table->time('time');

            $table->string('brief_desc');
            $table->text('full_desc');
            $table->boolean('completed')->default(false);
            $table->boolean('canceled')->default(false);

            // this is some Laravel magic.
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
        Schema::dropIfExists('appointments');
    }
}
