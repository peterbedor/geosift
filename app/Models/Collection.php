<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
	protected $fillable = [
		'name',
		'slug',
		'account_id'
	];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function account()
	{
		return $this->belongsTo(Account::class);
    }

	/**
	 * @return $this
	 */
	public function entries()
	{
		return $this->belongsToMany(Entry::class);
    }

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function fields()
	{
		return $this->belongsToMany(Field::class);
	}
}
