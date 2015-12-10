<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    protected $table = 'wards';

	protected $fillable = ['name', 'wards', 'type','location','district_id'];

	public $timestamps = false;

	public function district() {
		return $this->belongsTo('App\District');
	}
}
}
