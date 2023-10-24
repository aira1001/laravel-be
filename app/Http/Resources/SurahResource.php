<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\surah */
class SurahResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'number_of_verses' => $this->number_of_verses,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at, //
        ];
    }
}
