<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    protected $fillable = array('date', 'city', 'address_line', 'place_name');
}
