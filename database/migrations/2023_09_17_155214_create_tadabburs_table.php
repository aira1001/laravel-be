<?php

use App\Models\Ayah;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tadabburs', function (Blueprint $table) {
            $table->id();
            $table->string('content');
            $table->boolean('is_verified');
            $table->foreignIdFor(User::class, 'verified_by')->nullable();
            $table->foreignIdFor(User::class, 'created_by');
            $table->boolean('is_private');
            $table->boolean('should_show_name');
            $table->timestamps(); //
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tadabburs');
    }
};
