<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Ayah */
class AyahResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'sequence' => $this->sequence,
            'content' => $this->content,
            'surah' => new SurahResource($this->surah),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at, //
        ];
    }
}
