<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SkillResoucre extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'color'=>$this->color,
            'type'=>$this->type,
            'started_at'=>$this->started_at,
        ];
    }
}
