<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = array('album_id', 'photo', 'title', 'size');

	public function albums() {
		return $this->belongsTo('App\Models\Album');
	}
}
