<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Firm extends Model
{
  protected $fillable = [
    'name', 'title', 'location', 'email','phone_no','website','nature_of_business',
  ];
}
