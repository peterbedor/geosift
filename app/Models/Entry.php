<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
	public function collection()
	{
		return $this->belongsTo(Collection::class);
    }

	public function country()
	{
		return $this->hasOne(Country::class);
    }

	public function status()
	{
		return $this->hasOne(Status::class);
    }
}
