<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('ask');
            $table->string('answer')->nullable();
            $table->foreignId('ayah_id')->references('id')->on('ayahs');
            $table->integer('not_suitable')->nullable();
            $table->integer('like')->nullable();
            $table->foreignId('created_by')->references('id')->on('users');
            $table->timestamps(); //
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
