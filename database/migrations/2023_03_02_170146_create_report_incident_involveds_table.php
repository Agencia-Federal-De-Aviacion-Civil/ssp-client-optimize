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
        Schema::create('report_incident_involveds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('report_incident_id')->nullable();
            $table->foreign('report_incident_id')->references('id')->on('report_incidents')->onDelete('set null');
            $table->string('placeInvolved');
            $table->unsignedBigInteger('state_id')->nullable();
            $table->foreign('state_id')->references('id')->on('states')->onDelete('set null');
            $table->unsignedBigInteger('municipal_id')->nullable();
            $table->foreign('municipal_id')->references('id')->on('municipals')->onDelete('set null');
            $table->date('dateStartInvolved');
            $table->time('hourStartInvolved');
            $table->unsignedBigInteger('type_id')->nullable();
            $table->foreign('type_id')->references('id')->on('types')->onDelete('set null');
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('set null');
            $table->unsignedBigInteger('amodel_id')->nullable();
            $table->foreign('amodel_id')->references('id')->on('a_models')->onDelete('set null');
            $table->string('typeLicensePlate');
            $table->string('licensePlate');
            $table->string('serialNumber');
            $table->string('owner');
            $table->string('boperation_id');
            $table->string('aircraftDamage');
            $table->string('nameCaptan');
            $table->string('national_capitan');
            $table->unsignedBigInteger('license_id')->nullable();
            $table->foreign('license_id')->references('id')->on('licenses')->onDelete('set null');
            $table->unsignedBigInteger('license_type_id')->nullable();
            $table->foreign('license_type_id')->references('id')->on('license_types')->onDelete('set null');
            $table->string('expire');
            $table->string('injuries');
            $table->string('namePilot');
            $table->string('national_pilot');
            $table->unsignedBigInteger('license_id_copilot')->nullable();
            $table->foreign('license_id_copilot')->references('id')->on('licenses')->onDelete('set null');
            $table->unsignedBigInteger('license_type_id_copilot')->nullable();
            $table->foreign('license_type_id_copilot')->references('id')->on('license_types')->onDelete('set null');
            $table->string('expirePilot');
            $table->string('injuriesPilot');
            $table->string('injuriesPassengers');
            $table->unsignedBigInteger('forigin_id')->nullable();
            $table->foreign('forigin_id')->references('id')->on('places')->onDelete('set null');
            $table->unsignedBigInteger('fdestination_id')->nullable();
            $table->foreign('fdestination_id')->references('id')->on('places')->onDelete('set null');
            $table->string('commodity');
            $table->string('descriptionInvolved');
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
        Schema::dropIfExists('report_incident_involveds');
    }
};
