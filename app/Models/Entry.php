<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
	protected $fillable = [
		'collection_id',
		'country_id',
		'status_id',
		'name',
		'slug',
		'street_1',
		'street_2',
		'municipality',
		'territory',
		'sub_territory',
		'postal_code'
	];

	public function collection()
	{
		return $this->belongsTo(Collection::class);
    }

	public function country()
	{
		return $this->belongsTo(Country::class);
    }

	public function status()
	{
		return $this->hasOne(Status::class);
    }

	public function phoneNumber()
	{
		return $this->hasMany(FieldPhoneNumber::class)->with('field');
    }

	public function textbox()
	{
		return $this->hasMany(FieldTextbox::class)->with('field');
    }

    public function link()
	{
		return $this->hasMany(FieldLink::class)->with('field');
    }

	public function scopeFields($query)
	{
		return $query->with('textbox', 'phoneNumber', 'link');
    }
}
