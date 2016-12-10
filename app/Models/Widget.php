<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Widget extends Model
{
	public function account()
	{
		return $this->belongsTo(Account::class);
    }

	public function collection()
	{
		return $this->hasMany(Collection::class);
    }
}
