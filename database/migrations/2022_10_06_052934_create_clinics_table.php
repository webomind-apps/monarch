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
        Schema::create('clinics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('location_id')->constrained('locations')->onDelete('cascade');
            $table->string('name');
            $table->string('phone_number');
            $table->string('email')->unique();
            $table->string('admin_email');
            $table->string('address');
            $table->text('office_hours');
            $table->text('map_link');
            $table->text('google_review_link');
            $table->string('banner');
            $table->string('video_link');
            $table->text('description');
            $table->text('covid_update');
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clinics');
    }
};
