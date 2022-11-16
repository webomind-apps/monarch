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
        Schema::table('services', function (Blueprint $table) {
            $table->string('banner_header')->after('icon_path')->nullable();
            $table->text('long_description')->after('description')->nullable();
            $table->text('images')->after('banner_path')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn('banner_header');
            $table->dropColumn('long_description');
            $table->dropColumn('images');
        });
    }
};
