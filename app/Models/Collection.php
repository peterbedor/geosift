<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
	protected $fillable = [
		'name',
		'slug'
	];

	public function account()
	{
		return $this->belongsTo(Account::class);
    }

	public function entries()
	{
		return $this->belongsToMany(Entry::class);
    }

	public function widgets()
	{
		return $this->belongsTo(Widget::class);
    }
}
