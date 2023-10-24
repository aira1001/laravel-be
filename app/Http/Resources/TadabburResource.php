<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Tadabbur */
class TadabburResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'is_verified' => $this->is_verified,
            'content' => $this->content,
            'verified_by' => new UserResource($this->verifiedBy),
            'created_by' => new UserResource($this->createdBy),
            'ayahs' => AyahResource::collection($this->ayahs),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at, //
        ];
    }
}
