<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('surahs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('number_of_verses');
            $table->timestamps(); //
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('surahs');
    }
};
