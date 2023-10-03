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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('userID')->constrained('users');
            $table->string('business');
            $table->string('type');
            $table->integer('price');
            $table->integer('timeOfInv')->nullable();
            $table->string('city');
            $table->string('town');
            $table->string('village')->nullable();
            $table->string('PointToIllustration')->nullable();
            $table->integer('numberOfRealEstate')->require();
            $table->string('pathOfPhotos');
            $table->bigInteger('numberOfProcess');
            $table->boolean('accept')->default(false);
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
        Schema::dropIfExists('posts');
    }
};
