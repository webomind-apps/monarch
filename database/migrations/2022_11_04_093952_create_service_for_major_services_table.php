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
        Schema::create('service_for_major_services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('minor_service_id')->constrained('services')->onDelete('cascade');
            $table->foreignId('major_service_id')->constrained('major_services')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_for_major_services');
    }
};
