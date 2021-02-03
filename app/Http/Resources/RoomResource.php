<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RoomResource extends JsonResource
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
            'id_room' => $this->id_room,
            'image_path1' => $this->image_path1,
            'image_path2' => $this->image_path2,
            'image_path3' => $this->image_path3,
            'description' =>$this->description,
            'price' => $this->price
        ];
    }
}
