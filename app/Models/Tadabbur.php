<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Tadabbur extends Model
{
    use HasFactory;

    protected $fillable = ['is_private', 'is_verified', 'should_show_name', 'content', 'created_by'];

    protected $casts = [
        'is_verified' => 'boolean',
        'is_private' => 'boolean',
        'should_show_name' => 'boolean',
    ];

    public function verifiedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'verified_by');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function ayahs(): BelongsToMany
    {
        return $this->belongsToMany(Ayah::class, TadabburAyah::class);
    }


}
