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
        Schema::create('afac006s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('general_user_id')->nullable();
            $table->foreign('general_user_id')->references('id')->on('general_users')->onDelete('set null');            
            $table->text('folioNumber');
            $table->text('cityTown');
            $table->text('dateUTC');
            $table->text('timeUTC');
            $table->text('localTime');
            $table->text('region');
            $table->text('identificationServices');
            $table->text('airtrafficControl');
            $table->text('incidentReclassified');
            $table->text('specify')->nullable();            
            $table->text('incidentNumber');
            $table->text('newReclassification')->nullable();
            $table->text('reasonReclassification');
            $table->text('name');
            $table->text('firm');
            $table->text('date');
            $table->text('fileMinutes');        
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
        Schema::dropIfExists('afac006s');
    }
};
