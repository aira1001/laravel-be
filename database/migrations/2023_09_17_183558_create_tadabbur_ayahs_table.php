<?php

use App\Models\Ayah;
use App\Models\Tadabbur;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tadabbur_ayah', function (Blueprint $table) {
            $table->foreignIdFor(Tadabbur::class, 'tadabbur_id');
            $table->foreignIdFor(Ayah::class, 'ayah_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tadabbur_ayah');
    }
};
