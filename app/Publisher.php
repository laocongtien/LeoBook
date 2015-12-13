<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    protected $table = 'publishers';

	protected $fillable = ['name', 'info', 'logo'];

	public $timestamps = false;
}
