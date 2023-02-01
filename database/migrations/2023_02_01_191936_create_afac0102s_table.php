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
        Schema::create('afac0102s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('general_user_id')->nullable();
            $table->foreign('general_user_id')->references('id')->on('general_users')->onDelete('set null');                        
            $table->text('exploitative');
            $table->unsignedBigInteger('aircraftbrand_id')->nullable();
            $table->foreign('aircraftbrand_id')->references('id')->on('brands')->onDelete('set null');
            $table->unsignedBigInteger('aircraftmodel_id')->nullable();
            $table->foreign('aircraftmodel_id')->references('id')->on('a_models')->onDelete('set null');
            $table->text('aircraftRegistration');
            $table->unsignedBigInteger('enginebrand_id')->nullable();
            $table->foreign('enginebrand_id')->references('id')->on('brands')->onDelete('set null');
            $table->unsignedBigInteger('enginemodel_id')->nullable();
            $table->foreign('enginemodel_id')->references('id')->on('a_models')->onDelete('set null');
            $table->text('date');
            $table->text('hour');
            $table->text('localTime');
            $table->text('aerodromeName');
            $table->text('trackUsed');
            $table->text('positionRoute');
            $table->text('height');
            $table->text('indicatedSpeed');
            $table->text('flightPhases');
            $table->text('radome');
            $table->text('propeller');
            $table->text('windshield');
            $table->text('wingEngine');
            $table->text('bowExcept');
            $table->text('fuselage');
            $table->text('engine1');
            $table->text('undercarriage');
            $table->text('hitOdamada2');
            $table->text('line');
            $table->text('struckHurted3');
            $table->text('lights');
            $table->text('hitOdamada4');
            $table->text('otherSpecify');
            $table->text('consequenceFlight');
            $table->text('specify')->nullable();
            $table->text('skyConditions');
            $table->text('precipitation');
            $table->text('birdSpecies');
            $table->text('hitOdamaged1');
            $table->text('hitOdamaged2');
            $table->text('hitOdamaged3');
            $table->text('hitOdamaged4');
            $table->text('birdSize');
            $table->text('pilotDanger');
            $table->text('observation');
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
        Schema::dropIfExists('afac0102s');
    }
};
