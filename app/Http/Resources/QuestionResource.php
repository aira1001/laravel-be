<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Question */
class QuestionResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'ask' => $this->ask,
            'answer' => $this->answer,
            'ayah_id' => new AyahResource($this->ayah),
            'not_suitable' => $this->not_suitable,
            'like' => $this->like,
            'created_by' => new UserResource($this->createdBy),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at, //
        ];
    }
}
