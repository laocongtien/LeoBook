<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    protected $table = 'publishers';

	protected $fillable = ['name','location', 'phone', 'email', 'website', 'info', 'logo'];

	public $timestamps = false;
}
