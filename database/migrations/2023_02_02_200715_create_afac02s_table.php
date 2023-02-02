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
        Schema::create('afac02s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('general_user_id')->nullable();
            $table->foreign('general_user_id')->references('id')->on('general_users')->onDelete('set null');
            $table->text('date');
            $table->text('hour');
            $table->text('aerodromeName');
            $table->text('observerName');
            $table->text('dependence');
            $table->text('company');
            $table->text('birdLocation');
            $table->text('temperature');
            $table->text('wind');
            $table->text('birdType');
            $table->text('birdSize');
            $table->text('birdNumber');
            $table->text('birdColor');
            $table->text('strikingFeature');
            $table->text('birdsObservation');
            $table->text('probableCauses');
            $table->text('describeType');
            $table->text('otherSigns');
            $table->text('describeThem');
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
        Schema::dropIfExists('afac02s');
    }
};
