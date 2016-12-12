<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
	protected $fillable = [
		'field_type_id',
		'name',
		'description'
	];

	public function fieldType()
	{
		return $this->belongsTo(FieldType::class);
    }

	public function collections()
	{
		return $this->belongsToMany(Collection::class);
    }
}
