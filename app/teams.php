<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teams extends Model
{
      protected $fillable = [
        'first_name', 'last_name', 'position', 'image', 'description',
        ];
}
