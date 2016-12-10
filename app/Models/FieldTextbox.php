<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FieldTextbox extends Model
{
    public function field()
	{
		return $this->belongsTo(Field::class);
    }

	public function entry()
	{
		return $this->belongsTo(Entry::class);
    }
}
