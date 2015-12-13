<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $table = 'wishlists';

	protected $fillable = ['user_id', 'book_id'];

	public $timestamps = false;

	public function user() {
		return $this->belongsTo('App\User');
	}
	public function book() {
		return $this->belongsTo('App\Book');
	}
}