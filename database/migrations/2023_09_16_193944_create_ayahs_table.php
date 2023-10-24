<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ayahs', function (Blueprint $table) {
            $table->id();
            $table->integer('sequence');
            $table->string('content');
            $table->foreignId('surah_id')->references('id')->on('surahs');
            $table->timestamps(); //
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('verses');
    }
};
