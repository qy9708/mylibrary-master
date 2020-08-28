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
          "location"    => $this->when(!is_null($this->location), $this->location),
          "email"  => $this->when(!is_null($this->email), $this->email),
          "phone_no"     => $this->when(!is_null($this->phone_no), $this->phone_no),
          "website"    => $this->when(!is_null($this->website), $this->website),
          "nature_of_business"     => $this->when(!is_null($this->nature_of_business), $this->nature_of_business),

        ];
    }
}
