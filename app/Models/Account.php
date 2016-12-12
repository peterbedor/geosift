<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
	protected $fillable = [
		'name',
		'slug',
		'account_id',
		'active'
	];

	public function users()
	{
		return $this->hasMany(User::class);
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
