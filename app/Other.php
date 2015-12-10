<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Other extends Model
{
    protected $table = 'others';

	protected $fillable = ['value'];

	public $timestamps = false;
}
