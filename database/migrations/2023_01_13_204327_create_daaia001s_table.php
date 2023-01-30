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
            $table->text('aeronauticalAuthority');
            $table->text('flight_phase');
            $table->text('indicate');
            $table->text('collision');
            $table->text('altitudeEvent');
            $table->text('maker');
            $table->text('modelReport');
            $table->text('serialNumber');
            $table->text('enrollment');
            $table->text('amateur');
            $table->text('maximumWeight');
            $table->text('accidentWeight');
            $table->text('nose');
            $table->text('datum');
            $table->text('noseI');
            $table->text('datumI');
            $table->text('aircraftCategory');
            $table->text('indicateI');
            $table->text('airworthiness');
            $table->text('indicateII');
            $table->text('numberSeats');
            $table->text('flightCrew');
            $table->text('cabinCrew');
            $table->text('passengerSeats');
            $table->text('undercarriage');
            $table->text('MaintenanceProgram');
            $table->text('specify');
            $table->text('lastInspection');
            $table->text('other');
            $table->date('lastInspectionDate');
            $table->text('gliderHours');
            $table->text('hoursLastInsp');
            $table->text('hoursTimeAccident');
            $table->text('ifrTeam');
            $table->text('collapseSystem');
            $table->text('fireSystem');
            $table->text('type');
            $table->text('eltInstalled');
            $table->text('eltActivated');
            $table->text('eltManufacturer');
            $table->text('eltModel');
            $table->text('eltSerial');
            $table->text('eltBattery');            
            $table->text('engineType');
            $table->text('reciprocatingSystem');
            $table->text('makerPropeller');
            $table->text('modelPropeller');
            $table->text('pitchPropeller');
            $table->text('manufacturerEngine');
            $table->text('modelEngine');
            $table->text('powerEngine');
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
//            $table->text('copyRevalidation');
            $table->text('nameOwner1');
            $table->text('directionOwner1');
            $table->text('nameOperator1');
            $table->text('directionOperator1');
            $table->text('flightPurpose');
            $table->text('operation');
            $table->text('loadOperation');
            $table->text('passengersHow');
            $table->text('concessionType');
            $table->text('others');
//            $table->text('filesPermissions');
            $table->text('tuitionInvolved');
            $table->text('makerInvolved');
            $table->text('modelInvolved');
            $table->text('damageInvolved');
            $table->text('nameOwner2');
            $table->text('directionOwner2');
            $table->text('nameOperator2');
            $table->text('directionOperator2');
            $table->text('malfunction');
            $table->text('descriptionFail');
            $table->text('componentHours');
            $table->text('componentCycles');
            $table->text('componentInspection');
//            $table->text('filesLatestservices');            
            $table->unsignedBigInteger('a_model_id')->nullable();
            $table->foreign('a_model_id')->references('id')->on('a_models')->onDelete('set null');
            $table->text('presenceFire');
            $table->text('explosion');
            $table->text('describeDamage');
            $table->text('identificationOACI');
            $table->text('nameAerodrome');
            $table->text('distanceAerodrome');
            $table->text('directionAerodrome');
            $table->text('elevation');
            $table->text('proximityAirport');
            $table->text('approachSegment');
            $table->text('approachIFR');
            $table->text('approachVFR');
            $table->text('trackHeader');
            $table->text('longitude2');
            $table->text('broad');
            $table->text('materialHead');
            $table->text('conditionsRunway');
            $table->text('lastTakeoff');
            $table->text('timeTakeoff');
            $table->text('destinationAirport');
            $table->text('planFlight');
            $table->text('clearanceFlight');
            $table->text('eventOccurred');
            $table->text('loadAircraft');
            $table->text('otherAircraft');
            $table->text('litersFuel');
            $table->text('gallonsfuel');
            $table->text('typeFuel');
            $table->text('specifyFuel');
            $table->text('otherService');
//            $table->text('filereceiptFuel');
            $table->text('evacuationAircraft');
            $table->text('evacuationDescription');
//            $table->text('fileProcedures');
            $table->text('installationObservation');
            $table->text('timeObservation');
            $table->text('distanceAccident');
            $table->text('directionAccident');

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
