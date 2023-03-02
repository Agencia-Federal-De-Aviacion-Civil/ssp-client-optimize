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
        Schema::create('report_incident_involved_rvsms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('report_incident_id')->nullable();
            $table->foreign('report_incident_id')->references('id')->on('report_incidents')->onDelete('set null');
            $table->string('typeReport');
            $table->date('dateStartRVSM');
            $table->time('hourStartRVSM');
            $table->string('typeDeviation');
            $table->string('routeSegment');
            $table->string('acc');
            $table->string('causes');
            $table->string('airplaneIdenti');
            $table->string('ownerRVSM');
            $table->unsignedBigInteger('type_id_rvsm')->nullable();
            $table->foreign('type_id_rvsm')->references('id')->on('types')->onDelete('set null');
            $table->unsignedBigInteger('brand_id_rvsm')->nullable();
            $table->foreign('brand_id_rvsm')->references('id')->on('brands')->onDelete('set null');
            $table->unsignedBigInteger('amodel_id_rvsm')->nullable();
            $table->foreign('amodel_id_rvsm')->references('id')->on('a_models')->onDelete('set null');
            $table->string('assignedFlight');
            $table->string('currentFlight');
            $table->string('mistake');
            $table->string('timeLine');
            $table->string('deviationPosition');
            $table->string('trafficConflict');
            $table->string('actionATC');
            $table->string('otherComments');
            $table->unsignedBigInteger('state_id_rvsm')->nullable();
            $table->foreign('state_id_rvsm')->references('id')->on('states')->onDelete('set null');
            $table->unsignedBigInteger('municipal_id_rvsm')->nullable();
            $table->foreign('municipal_id_rvsm')->references('id')->on('municipals')->onDelete('set null');
            $table->date('dateNotification');
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
        Schema::dropIfExists('report_incident_involved_rvsms');
    }
};
