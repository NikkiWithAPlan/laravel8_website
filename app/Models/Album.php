<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = array('name', 'cover_image');

	public function photos() {
		return $this->hasMany('App\Models\Photo');
	}
}
