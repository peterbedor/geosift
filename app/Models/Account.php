<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
	public function users()
	{
		return $this->belongsToMany(User::class);
    }

	public function collections()
	{
		return $this->hasMany(Collection::class);
    }

	public function widgets()
	{
		return $this->hasMany(Widget::class);
    }
}
