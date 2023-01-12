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
        Schema::create('general_users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('apPaterno');
            $table->string('apMaterno');
            $table->string('email');
            $table->string('telephone');
            $table->string('extention')->nullable();
            $table->string('enterprise');
            $table->string('slug');
            $table->string('typePeople');
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
        Schema::dropIfExists('general_users');
    }
};
