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
            $table->string('services_meta_title')->after('about_meta_description');
            $table->text('services_meta_description')->after('services_meta_title');
            $table->text('services_meta_keywords')->after('services_meta_description');

            $table->string('location_meta_title')->after('services_meta_keywords');
            $table->text('location_meta_description')->after('location_meta_title');
            $table->text('location_meta_keywords')->after('location_meta_description');

            $table->string('career_meta_title')->after('location_meta_keywords');
            $table->text('career_meta_description')->after('career_meta_title');
            $table->text('career_meta_keywords')->after('career_meta_description');
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
            $table->dropColumn('services_meta_title');
            $table->dropColumn('services_meta_description');
            $table->dropColumn('services_meta_keywords');

            $table->dropColumn('location_meta_title');
            $table->dropColumn('location_meta_description');
            $table->dropColumn('location_meta_keywords');

            $table->dropColumn('career_meta_title');
            $table->dropColumn('career_meta_description');
            $table->dropColumn('career_meta_keywords');
        });
    }
};
