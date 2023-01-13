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
        Schema::create('afac001as', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('general_user_id')->nullable();
            $table->foreign('general_user_id')->references('id')->on('general_users')->onDelete('set null');
            $table->date('dateEvent');
            $table->time('hourEvent');
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('set null');
            $table->unsignedBigInteger('amodel_id')->nullable();
            $table->foreign('amodel_id')->references('id')->on('a_models')->onDelete('set null');
            $table->string('serialNumber');
            $table->string('licensePlate');
            $table->string('maximumWeight');
            $table->string('airworthinessCertificate');
            $table->string('validity');
            $table->string('owner');
            $table->string('place');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('elevation');
            $table->string('crashSite');
            $table->string('aircraftDamage');
            $table->unsignedBigInteger('place_origen_id')->nullable();
            $table->foreign('place_origen_id')->references('id')->on('places')->onDelete('set null');
            $table->unsignedBigInteger('place_destination_id')->nullable();
            $table->foreign('place_destination_id')->references('id')->on('places')->onDelete('set null');
            $table->string('serviceOfDestiny');
            $table->string('dangerousGoods');
            $table->unsignedBigInteger('base_operation_id')->nullable();
            $table->foreign('base_operation_id')->references('id')->on('base_operations')->onDelete('set null');
            $table->string('peopleOnBoard');
            $table->string('fatalInjuries');
            $table->string('seriousInjuries');
            $table->string('otherFatalInjuries');
            $table->unsignedBigInteger('nationality_passengers_id')->nullable();
            $table->foreign('nationality_passengers_id')->references('id')->on('nacionalities')->onDelete('set null');
            $table->string('commanderName');
            $table->unsignedBigInteger('nationality_commander_id')->nullable();
            $table->foreign('nationality_commander_id')->references('id')->on('nacionalities')->onDelete('set null');
            $table->string('licenseNumber');
            $table->string('category');
            $table->string('validityLicense');
            $table->string('oficialName');
            $table->unsignedBigInteger('nationality_oficial_id')->nullable();
            $table->foreign('nationality_oficial_id')->references('id')->on('nacionalities')->onDelete('set null');
            $table->string('licenseNumberOficial');
            $table->string('categoryOficial');
            $table->string('validityLicenseOficial');
            $table->string('copilotInjuries');
            $table->string('emergencyTeam');
            $table->string('searchWork');
            $table->string('descriptionFacts');
            $table->string('investigatorCharge');
            $table->string('telephone');
            $table->string('email');
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
        Schema::dropIfExists('afac001as');
    }
};
