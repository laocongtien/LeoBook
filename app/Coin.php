<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    protected $table = 'coins';

	protected $fillable = ['order_id', 'coin', 'status'];

	public $timestamps = false;

	public function order() {
		return $this->belongsTo('App\Oder');
	}
}
