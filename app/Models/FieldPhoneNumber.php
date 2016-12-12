<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FieldPhoneNumber extends Model
{
	protected $fillable = [
		'field_id',
		'entry_id',
		'country_code',
		'area_code',
		'phone',
		'extension'
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
