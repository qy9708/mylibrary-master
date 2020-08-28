<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class BookResource extends Resource
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
            "id"       => $this->when(!is_null($this->id), $this->id),
            "title"    => $this->when(!is_null($this->title), $this->title),
            "image"    => $this->when(!is_null($this->image), $this->image),
            "edition"  => $this->when(!is_null($this->edition), $this->edition),
            "year"     => $this->when(!is_null($this->year), $this->year),
            'publisher' => PublisherResource::collection($this->whenLoaded('publisher')),
            'authors' =>  AuthorResource::collection($this->whenLoaded('authors')),
        ];
    }
}
