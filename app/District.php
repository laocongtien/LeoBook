<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'districts';

	protected $fillable = ['name', 'type', 'location','province_id'];

	public $timestamps = false;

	public function province() {
		return $this->belongsTo('App\Province');
	}
}
