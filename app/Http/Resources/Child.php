<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Child extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'schoolclass' => $this->schoolclass,
            'updated_at' => $this->updated_at,
        ];
    }
}
