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
            // $table->unsignedBigInteger('report')->nullable();
            $table->unsignedBigInteger('general_user_id')->nullable();
            $table->foreign('general_user_id')->references('id')->on('general_users')->onDelete('set null');
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
            $table->string('flight_phase');
            $table->string('indicate');
            $table->string('collision');
            $table->string('altitudeEvent');
            $table->string('maker');
            $table->string('modelReport');
            $table->string('serialNumber');
            $table->string('enrollment');
            $table->string('amateur');
            $table->string('maximumWeight');
            $table->string('accidentWeight');
            $table->string('nose');
            $table->string('datum');
            $table->string('noseI');
            $table->string('datumI');
            $table->string('aircraftCategory');
            $table->string('indicateI');
            $table->string('airworthiness');
            $table->string('indicateII');
            $table->string('numberSeats');
            $table->string('flightCrew');
            $table->string('cabinCrew');
            $table->string('passengerSeats');
            $table->string('undercarriage');
            $table->string('MaintenanceProgram');
            $table->string('specify');
            $table->string('lastInspection');
            $table->string('other');
            $table->date('lastInspectionDate');
            $table->string('gliderHours');
            $table->string('hoursLastInsp');
            $table->string('hoursTimeAccident');
            $table->string('ifrTeam');
            $table->string('collapseSystem');
            $table->string('fireSystem');
            $table->string('type');
            $table->string('eltInstalled');
            $table->string('eltActivated');
            $table->string('eltManufacturer');
            $table->string('eltModel');
            $table->string('eltSerial');
            $table->string('eltBattery');            
            $table->string('engineType');
            $table->string('reciprocatingSystem');
            $table->string('makerPropeller');
            $table->string('modelPropeller');
            $table->string('pitchPropeller');
            $table->string('manufacturerEngine');
            $table->string('modelEngine');
            $table->string('powerEngine');
            $table->text('engineSerie1');
            $table->text('manufacturingDate1');
            $table->text('totalTime1');
            $table->text('lastIspection1');
            $table->text('lastRrepair1');
            $table->text('engineSerie2');
            $table->text('manufacturingDate2');
            $table->text('totalTime2');
            $table->text('lastIspection2');
            $table->text('lastRrepair2');
            $table->text('engineSerie3');
            $table->text('manufacturingDate3');
            $table->text('totalTime3');
            $table->text('lastIspection3');
            $table->text('lastRrepair3');
            $table->text('engineSerie4');
            $table->text('manufacturingDate4');
            $table->text('totalTime4');
            $table->text('lastIspection4');
            $table->text('lastRrepair4');
            $table->text('copyRevalidation');
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
