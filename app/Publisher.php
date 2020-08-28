<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{

    protected $fillable = [
        'name','address','email',
    ];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
    //
}
