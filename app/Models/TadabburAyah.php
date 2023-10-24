<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class TadabburAyah extends Pivot
{
    public $timestamps = false;

    public function tadabbur(): BelongsTo
    {
        return $this->belongsTo(Tadabbur::class);
    }

    public function ayah(): BelongsTo
    {
        return $this->belongsTo(Ayah::class);
    }
}
