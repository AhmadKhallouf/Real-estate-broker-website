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
        Schema::create('post_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id')->constrained('posts')->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedInteger('in_floor')->nullable();
            $table->unsignedInteger('number_of_floors')->nullable();
            $table->unsignedInteger('number_of_bedrooms');
            $table->unsignedInteger('number_of_living_rooms');
            $table->unsignedInteger('number_of_bathrooms');
            $table->string('model_of_kitchen');
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
        Schema::dropIfExists('post_infos');
    }
};
