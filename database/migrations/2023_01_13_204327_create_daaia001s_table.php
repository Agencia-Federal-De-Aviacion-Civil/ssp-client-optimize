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
        Schema::create('daaia001s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('report_id')->nullable();
            $table->foreign('report_id')->references('id')->on('reports')->onDelete('set null');
            $table->string('exactPlace');
            $table->unsignedBigInteger('state_id')->nullable();
            $table->foreign('state_id')->references('id')->on('states')->onDelete('set null');
            $table->unsignedBigInteger('municipal_id')->nullable();
            $table->foreign('municipal_id')->references('id')->on('municipals')->onDelete('set null');
            $table->string('city');
            $table->string('latitude');
            $table->string('longitude');
            $table->date('date');
            $table->time('time');
            $table->string('aeronauticalAuthority');
            $table->unsignedBigInteger('flight_phase_id')->nullable();
            $table->foreign('flight_phase_id')->references('id')->on('flight_phases')->onDelete('set null');
            $table->string('indicate');
            $table->unsignedBigInteger('collision_id')->nullable();
            $table->foreign('collision_id')->references('id')->on('collisions')->onDelete('set null');
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
        Schema::dropIfExists('daaia001s');
    }
};
