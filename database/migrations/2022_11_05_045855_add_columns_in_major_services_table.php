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
           $table->string('icon')->after('id');
           $table->string('title')->after('icon');
           $table->text('description')->nullable()->change();
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
            $table->dropColumn('icon');
            $table->dropColumn('title');
            $table->dropColumn('description');
        });
    }
};
