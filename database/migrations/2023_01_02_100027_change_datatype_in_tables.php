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
        Schema::table('blogs', function (Blueprint $table) {
            $table->text('meta_title')->change();
        });
        Schema::table('clinics', function (Blueprint $table) {
            $table->text('meta_title')->change();
        });
        Schema::table('services', function (Blueprint $table) {
            $table->text('meta_title')->change();
        });
        Schema::table('photo_galleries', function (Blueprint $table) {
            $table->text('meta_title')->change();
        });
        Schema::table('smile_galleries', function (Blueprint $table) {
            $table->text('meta_title')->change();
        });
        Schema::table('promotions', function (Blueprint $table) {
            $table->text('meta_title')->change();
        });
        Schema::table('major_services', function (Blueprint $table) {
            $table->text('meta_title')->change();
        });
        Schema::table('financials', function (Blueprint $table) {
            $table->text('meta_title')->change();
        });
        Schema::table('who_we_ares', function (Blueprint $table) {
            $table->text('meta_title')->change();
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
