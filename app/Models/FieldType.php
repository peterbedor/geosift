<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FieldType extends Model
{
	public function field()
	{
		return $this->hasMany(Field::class);
    }
}
