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
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->enum('type_of_investment',['sell','rent','mortgage']);
            $table->enum('type_of_real_estate',['villa','house','apartment','store','land']);
            $table->integer('space');
            $table->unsignedInteger('time_of_investment')->nullable();
            $table->string('city');
            $table->string('town')->nullable();
            $table->string('neighborhood');
            $table->string('village')->nullable();
            $table->text('PointToIllustration')->nullable();
            $table->text('description')->nullable();
            $table->bigInteger('investment_value');
            $table->bigInteger('numberOfProcess');
            $table->unsignedInteger('time_of_ad');
            $table->enum('status',['pending','active','expired','refuse']);
            $table->timestamps();
            $table->timestamp('expires_at')->nullable();
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
