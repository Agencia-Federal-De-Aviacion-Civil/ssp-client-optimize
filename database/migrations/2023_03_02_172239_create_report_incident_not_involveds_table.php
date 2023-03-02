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
        Schema::create('report_incident_not_involveds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('report_incident_id')->nullable();
            $table->foreign('report_incident_id')->references('id')->on('report_incidents')->onDelete('set null');
            $table->date('dateStartNot');
            $table->time('hourStartNot');
            $table->string('placeNotInv');
            $table->string('descriptionNot');
            $table->string('consequenceNot');
            $table->string('proposalsNot');
            $table->string('frequentNot');
            $table->string('gravityNot');
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
        Schema::dropIfExists('report_incident_not_involveds');
    }
};
