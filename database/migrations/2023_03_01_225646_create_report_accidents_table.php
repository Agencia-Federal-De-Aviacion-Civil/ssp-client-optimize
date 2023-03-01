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
        Schema::create('report_accidents', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('users_reporter_id')->nullable();
            // $table->foreign('users_reporter_id')->references('id')->on('users_reporters')->onDelete('set null');
            $table->string('event',25);
            $table->unsignedBigInteger('event_id')->nullable();
            $table->foreign('event_id')->references('id')->on('events')->onDelete('set null');
            $table->unsignedBigInteger('sub_event_id')->nullable();
            $table->foreign('sub_event_id')->references('id')->on('sub_events')->onDelete('set null');
            $table->string('other',120);
            $table->string('involved',10);
            $table->string('place',255);
            $table->unsignedBigInteger('state_id')->nullable();
            $table->foreign('state_id')->references('id')->on('states')->onDelete('set null');
            $table->unsignedBigInteger('municipal_id')->nullable();
            $table->foreign('municipal_id')->references('id')->on('municipals')->onDelete('set null');
            $table->date('dateStart');
            $table->time('hourStart');
            $table->unsignedBigInteger('type_id')->nullable();
            $table->foreign('type_id')->references('id')->on('types')->onDelete('set null');
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('set null');
            $table->unsignedBigInteger('amodel_id')->nullable();
            $table->foreign('amodel_id')->references('id')->on('a_models')->onDelete('set null');
            $table->string('licensePlate',120);
            $table->string('serialNumber',120);
            $table->string('owner',255);
            $table->unsignedBigInteger('base_operation_id')->nullable();
            $table->foreign('base_operation_id')->references('id')->on('base_operations')->onDelete('set null');
            $table->string('nameCaptan',255);
            $table->string('national_capitan')->nullable();
            $table->unsignedBigInteger('license_id')->nullable();
            $table->foreign('license_id')->references('id')->on('licenses')->onDelete('set null');
            $table->unsignedBigInteger('license_type_id')->nullable();
            $table->foreign('license_type_id')->references('id')->on('license_types')->onDelete('set null');
            $table->string('expire');
            $table->string('injuries');
            $table->string('namePilot');
            $table->string('national_pilot')->nullable();
            $table->unsignedBigInteger('license_id_copilot')->nullable();
            $table->foreign('license_id_copilot')->references('id')->on('licenses')->onDelete('set null');
            $table->unsignedBigInteger('license_type_id_copilot')->nullable();
            $table->foreign('license_type_id_copilot')->references('id')->on('license_types')->onDelete('set null');
            $table->string('injuriesPilot');
            $table->string('injuriesPassengers');
            $table->unsignedBigInteger('forigin_id')->nullable();
            $table->foreign('forigin_id')->references('id')->on('places')->onDelete('set null');
            $table->unsignedBigInteger('fdestination_id')->nullable();
            $table->foreign('fdestination_id')->references('id')->on('places')->onDelete('set null');
            $table->string('commodity');
            $table->string('description');
            $table->string('observations');
            $table->string('consequence');
            $table->string('proposals');
            $table->string('frequent',20);
            $table->string('gravity',20);
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
        Schema::dropIfExists('report_accidents');
    }
};
