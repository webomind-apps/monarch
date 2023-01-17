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
            $table->dropColumn('home_title');
            $table->dropColumn('patients_title');
            $table->dropColumn('about_title');
            $table->dropColumn('services_title');
            $table->dropColumn('location_title');
            $table->dropColumn('career_title');
            $table->dropColumn('doctors_title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tables', function (Blueprint $table) {
            //
        });
    }
};
