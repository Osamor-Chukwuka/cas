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
        Schema::create('complain', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->references('id')->on('users');
            $table->bigInteger('cafetaria_id')->references('id')->on('cafetarias');
            $table->string('message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complain');
    }
};
