<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
	public function entry()
	{
		return $this->belongsTo(Entry::class);
    }
}
