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
            $table->string('patients_title')->after('meta_keywords');
            $table->string('about_title')->after('patients_meta_keywords');
            $table->string('services_title')->after('about_meta_description');
            $table->string('location_title')->after('services_meta_keywords');
            $table->string('career_title')->after('location_meta_keywords');
            $table->string('doctors_title')->after('career_meta_description');
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
            $table->dropColumn('patients_title');
            $table->dropColumn('about_title');
            $table->dropColumn('services_title');
            $table->dropColumn('location_title');
            $table->dropColumn('career_title');
            $table->dropColumn('doctors_title');
        });
    }
};
