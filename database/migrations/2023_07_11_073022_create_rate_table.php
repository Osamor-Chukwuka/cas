<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rate', function (Blueprint $table) {
            $table->id();
            $table->integer('question1');
            $table->integer('question2');
            $table->integer('question3');
            $table->integer('question4');
            $table->integer('question5');
            $table->integer('question6');
            $table->integer('question8');
            $table->integer('question9');
            $table->integer('question10');
            $table->integer('question11');
            $table->integer('question12');
            $table->integer('question13');
            $table->integer('question14');
            $table->integer('question15');
            $table->integer('question16');
            
            $table->integer('food_quality');
            $table->integer('physical_environment');
            $table->integer('customer_service');
            $table->integer('pricing');

            $table->integer('total');
            $table->bigInteger('cafetaria_id')->references('id')->on('cafetarias');
            $table->bigInteger('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rate');
    }
};
