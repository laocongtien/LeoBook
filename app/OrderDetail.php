<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'order_details';

	protected $fillable = ['order_id', 'book_id', 'qty'];

	public $timestamps = false;

	public function order() {
		return $this->belongsTo('App\Order');
	}
	public function book() {
		return $this->belongsTo('App\Book');
	}
}

