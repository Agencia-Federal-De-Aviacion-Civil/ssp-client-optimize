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
        Schema::create('report_incident_involved_procs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('report_incident_id')->nullable();
            $table->foreign('report_incident_id')->references('id')->on('report_incidents')->onDelete('set null');
            $table->unsignedBigInteger('type_id_proc')->nullable();
            $table->foreign('type_id_proc')->references('id')->on('types')->onDelete('set null');
            $table->unsignedBigInteger('brand_id_proc')->nullable();
            $table->foreign('brand_id_proc')->references('id')->on('brands')->onDelete('set null');
            $table->unsignedBigInteger('amodel_id_proc')->nullable();
            $table->foreign('amodel_id_proc')->references('id')->on('a_models')->onDelete('set null');
            $table->string('serialNumberProc');
            $table->string('typeLicensePlateProc');
            $table->string('licensePlateProc');
            $table->string('ownerProc');
            $table->date('dateStartInvolvedProc');
            $table->string('boperation_id_proc');
            $table->string('brandProc');
            $table->string('modelProc');
            $table->string('posProc1')->nullable();
            $table->string('posProc2')->nullable();
            $table->string('posProc3')->nullable();
            $table->string('posProc4')->nullable();
            $table->string('brandProcEngine');
            $table->string('modelProcEngine');
            $table->string('posProcEngine1')->nullable();
            $table->string('posProcEngine2')->nullable();
            $table->string('posProcEngine3')->nullable();
            $table->string('posProcEngine4')->nullable();
            $table->string('earthProc');
            $table->string('descriptionProc');
            $table->string('origenProc');
            $table->string('actionProc');
            $table->string('componentProc');
            $table->string('nPProc');
            $table->string('nsPProc');
            $table->string('factoryProc');
            $table->string('hourControl');
            $table->string('cycleControl');
            $table->string('daysControl');
            $table->string('otherControl');
            $table->string('ttComponent');
            $table->string('ctComponent');
            $table->string('turmComponent');
            $table->string('curmComponent');
            $table->string('workshop');
            $table->unsignedBigInteger('code_ata_id')->nullable();
            $table->foreign('code_ata_id')->references('id')->on('code_atas')->onDelete('set null');
            $table->string('stc');
            $table->string('considerInformation');
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
        Schema::dropIfExists('report_incident_involved_procs');
    }
};
