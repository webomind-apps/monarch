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
        Schema::table('contact_us', function (Blueprint $table) {
            $table->text('meta_title')->change();
            $table->text('home_meta_title')->change();
            $table->text('patients_meta_title')->change();
            $table->text('about_meta_title')->change();
            $table->text('services_meta_title')->change();
            $table->text('location_meta_title')->change();
            $table->text('career_meta_title')->change();
            $table->text('doctors_meta_title')->change();
            $table->text('doctors_meta_title')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contact_us', function (Blueprint $table) {
            //
        });
    }
};
