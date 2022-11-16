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
        Schema::table('major_services', function (Blueprint $table) {
           $table->dropColumn('banner_header');
           $table->dropColumn('description');
           $table->dropColumn('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('major_services', function (Blueprint $table) {
            $table->string('banner_header');
            $table->text('description');
            $table->string('image');
        });
    }
};
