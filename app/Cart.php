<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';

	protected $fillable = ['name', 'book_id', 'qty'];

	public $timestamps = false;

	public function book() {
		return $this->hasMany('App\Book');
	}
}
