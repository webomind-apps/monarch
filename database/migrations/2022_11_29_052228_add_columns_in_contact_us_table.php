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
            $table->string('doctors_meta_title')->after('career_meta_description');
            $table->text('doctors_meta_description')->after('doctors_meta_title');
            $table->text('doctors_meta_keywords')->after('doctors_meta_description');
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
            $table->dropColumn('doctors_meta_title');
            $table->dropColumn('doctors_meta_description');
            $table->dropColumn('doctors_meta_keywords');
        });
    }
};
