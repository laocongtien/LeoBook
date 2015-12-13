<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table = 'notification';

	protected $fillable = ['user_id', 'title', 'content','star','read'];

	public $timestamps = false;

	public function user() {
		return $this->belongsTo('App\User');
	}
}
