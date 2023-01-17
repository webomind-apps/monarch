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
            $table->string('patients_meta_title')->after('meta_keywords');
            $table->text('patients_meta_description')->after('patients_meta_title');
            $table->text('patients_meta_keywords')->after('patients_meta_description');
            $table->string('about_meta_title')->after('patients_meta_keywords');
            $table->text('about_meta_description')->after('about_meta_title');
            $table->text('about_meta_keywords')->after('about_meta_description');
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
            $table->dropColumn('patients_meta_title');
            $table->dropColumn('patients_meta_description');
            $table->dropColumn('patients_meta_keywords');
            $table->dropColumn('about_meta_title');
            $table->dropColumn('about_meta_description');
            $table->dropColumn('about_meta_keywords');
        });
    }
};
