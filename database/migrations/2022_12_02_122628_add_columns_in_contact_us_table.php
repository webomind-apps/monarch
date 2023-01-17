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
            $table->string('home_title')->after('meta_keywords');
            $table->string('home_meta_title')->after('home_title');
            $table->text('home_meta_description')->after('home_meta_title');
            $table->text('home_meta_keywords')->after('home_meta_description');
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
            $table->dropColumn('home_title');
            $table->dropColumn('home_meta_title');
            $table->dropColumn('home_meta_description');
            $table->dropColumn('home_meta_keywords');
        });
    }
};
