<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class LogResource extends Resource
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
          "week"=>$this->week,
          "description"     => $this->when(!is_null($this->description), $this->description),

        ];
    }
}
