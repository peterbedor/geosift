<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FieldLink extends Model
{
	protected $fillable = [
		'field_id',
		'entry_id',
		'link',
		'label'
	];

	public function field()
	{
		return $this->belongsTo(Field::class);
    }

	public function entry()
	{
		return $this->belongsTo(Entry::class);
    }
}
