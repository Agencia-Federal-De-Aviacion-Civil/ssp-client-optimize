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
        Schema::create('afac005s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('general_user_id')->nullable();
            $table->foreign('general_user_id')->references('id')->on('general_users')->onDelete('set null');            
            $table->text('dateLocal');
            $table->text('timeLocal');
            $table->text('airportIdentifier');
            $table->text('deviationType');
            $table->text('vehicle');
            $table->text('specify')->nullable();
            $table->text('economicNumber');
            $table->text('plates');
            $table->text('vehicleAccompanied');
            $table->text('name1');
            $table->text('employee1');
            $table->text('specify1')->nullable();
            $table->text('certifiedAirport');
            $table->text('type')->nullable();
            $table->text('deviation');
            $table->text('airfieldProvides');
            $table->text('completeDriver');
            $table->text('when')->nullable();
            $table->text('trainingProgram');
            $table->text('knowledgeExperience');
            $table->text('specify2')->nullable();
            $table->text('investigationFound');
            $table->text('specify3')->nullable();
            $table->text('comunication');
            $table->text('specify4')->nullable();
            $table->text('name2');
            $table->text('employee2');
            $table->text('specify5')->nullable();
            $table->text('deviationDetected');
            $table->text('specify6')->nullable();
            $table->text('visibleTower');
            $table->text('specify7')->nullable();
            $table->text('avoidCollision');
            $table->text('horizontal');
            $table->text('vertical');
            $table->text('weatherConditions');
            $table->text('specify8')->nullable();
            $table->text('prevailingVisibility');
            $table->text('temperatureSpecify');
            $table->text('roofSpecify');
            $table->text('movementArea');
            $table->text('specify9')->nullable();
            $table->text('movementFeatured');
            $table->text('specify10')->nullable();
            $table->text('clearanceCollision');
            $table->text('specify11')->nullable();
            $table->text('lossSeparation');
            $table->text('attached');
            $table->text('specify12')->nullable();
            $table->text('takenPlanned');
            $table->text('specify13')->nullable();
            $table->text('name3');
            $table->text('firm');
            $table->text('date');
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
        Schema::dropIfExists('afac005s');
    }
};
