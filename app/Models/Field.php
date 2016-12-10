<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
	public function fieldType()
	{
		return $this->hasMany(FieldType::class);
    }
}
