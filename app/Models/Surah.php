<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Surah extends Model
{
    use HasFactory;

    public function verse(): HasMany
    {
        return $this->hasMany(Ayah::class);
    }

    public function tadabbur(): BelongsTo
    {
        return $this->belongsTo(Tadabbur::class);
    }
}
