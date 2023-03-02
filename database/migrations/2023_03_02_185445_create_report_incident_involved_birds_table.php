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
        Schema::create('report_incident_involved_birds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('report_incident_id')->nullable();
            $table->foreign('report_incident_id')->references('id')->on('report_incidents')->onDelete('set null');
            $table->string('typeLicensePlateBird');
            $table->string('licensePlateBird');
            $table->unsignedBigInteger('type_id_bird')->nullable();
            $table->foreign('type_id_bird')->references('id')->on('types')->onDelete('set null');
            $table->unsignedBigInteger('brand_id_bird')->nullable();
            $table->foreign('brand_id_bird')->references('id')->on('brands')->onDelete('set null');
            $table->unsignedBigInteger('amodel_id_bird')->nullable();
            $table->foreign('amodel_id_bird')->references('id')->on('a_models')->onDelete('set null');
            $table->string('engineBird');
            $table->string('brandProcEngineBird');
            $table->string('modelProcEngineBird');
            $table->string('ownerBird');
            $table->date('dateStartBird');
            $table->time('hourStartBird');
            $table->string('boperation_id_bird');
            $table->string('runway');
            $table->string('location');
            $table->string('height');
            $table->string('speed');
            $table->string('flightPhases');
            $table->string('radome');
            $table->string('windshield');
            $table->string('noseAB');
            $table->string('engine1');
            $table->string('engine2');
            $table->string('engine3');
            $table->string('engine4');
            $table->string('propeller');
            $table->string('rotor');
            $table->string('fuselage');
            $table->string('undercarriage');
            $table->string('tail');
            $table->string('lights');
            $table->string('otherBirdResult');
            $table->string('otherBird');
            $table->string('eventEffect');
            $table->string('eventEffectOther');
            $table->string('skyCondition');
            $table->string('restrictionsVisibility');
            $table->string('restrictionsOther');
            $table->string('speciesfauna');
            $table->string('specimensSeen1');
            $table->string('specimensSeen2to10');
            $table->string('specimensSeen11to100');
            $table->string('specimenSize');
            $table->string('pilotNotice');
            $table->string('observationsBird');
            $table->string('aircraftOut');
            $table->string('repairCost');
            $table->string('otherCost');
            $table->string('reportedBy');
            $table->string('marketStall');
            $table->string('company');
            $table->string('producedBy');
            $table->string('authority');
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
        Schema::dropIfExists('report_incident_involved_birds');
    }
};
