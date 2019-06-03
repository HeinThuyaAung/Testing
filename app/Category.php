<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;


class Category extends Model implements HasMedia
{
	use HasMediaTrait;
    //
	protected $fillable = ["name","type","date"];
	public static $rules = [
		"name"  => 'required|min:4',
		"type"  => 'required',
		"date"  => 'required'
	];

	public function items() {
		return $this->belongsToMany("App\Item", "item_category", "category_id", "item_id");
	}
}
