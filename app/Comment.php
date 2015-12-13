<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

	protected $fillable = ['user_id', 'book_id', 'title','content','rate'];

	public $timestamps = false;

	public function book() {
		return $this->belongsTo('App\Book');
	}
	public function user() {
		return $this->belongsTo('App\User');
	}
}
