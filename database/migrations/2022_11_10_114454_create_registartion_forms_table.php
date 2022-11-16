<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registartion_forms', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('guardian_first_name');
            $table->string('guardian_middle_name');
            $table->string('guardian_last_name');
            $table->string('date');
            $table->boolean('acute_respiratory_illness')->default(0);
            $table->boolean('covid_infections_concern')->default(0);
            $table->boolean('contact_with_covid_case')->default(0);
            $table->boolean('seventy_plus')->default(0);
            $table->boolean('fever')->default(0);
            $table->boolean('cough')->default(0);
            $table->boolean('shortness_of_breath')->default(0);
            $table->boolean('sore_throat')->default(0);
            $table->boolean('loss_of_smell_taste')->default(0);
            $table->boolean('pink_eye')->default(0);
            $table->boolean('fatigue')->default(0);
            $table->boolean('nausea')->default(0);
            $table->boolean('nasal_congestion')->default(0);
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
        Schema::dropIfExists('registartion_forms');
    }
};
