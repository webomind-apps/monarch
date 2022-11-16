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
        Schema::table('enquiries', function (Blueprint $table) {

            $table->dropColumn('first_name');
            $table->dropColumn('last_name');

            $table->string('full_name')->after('id');
            $table->string('patient_type')->after('full_name');
            $table->string('preferred_time')->after('email');
            $table->string('preferred_date')->after('preferred_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('enquiries', function (Blueprint $table) {
            $table->dropColumn('full_name');
            $table->dropColumn('patient_type');
            $table->dropColumn('preferred_time');
            $table->dropColumn('preferred_date');
        });
    }
};
