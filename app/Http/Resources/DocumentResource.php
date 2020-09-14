<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class FirmResource extends Resource
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
          "id"    => $this->when(!is_null($this->id), $this->id),
          "name"=>$this->name,
          "file"    => $this->when(!is_null($this->file), $this->file),
          
        ];
    }
}