<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

	protected $fillable = ['user_id', 'location', 'note','total','status','coin_receive','coin_use','shipping_method','payment_method'];

	public $timestamps = false;

	public function user() {
		return $this->belongsTo('App\User');
	}
}
