<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'authors';

	protected $fillable = ['name', 'realname', 'years', 'avatar','info'];

	public $timestamps = false;

	public function book() {
		return $this->hasMany('App\Book');
	}
}
