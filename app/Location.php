<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'locations';

	protected $fillable = ['user_id', 'house_number', 'street','province_id','district_id','ward_id','default'];

	public $timestamps = false;

	public function user() {
		return $this->belongsTo('App\User');
	}
	public function province() {
		return $this->belongsTo('App\Province');
	}
	public function district() {
		return $this->belongsTo('App\District');
	}
	public function ward() {
		return $this->belongsTo('App\Ward');
	}
}
