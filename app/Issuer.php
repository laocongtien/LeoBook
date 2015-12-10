<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issuer extends Model
{
    protected $table = 'issuers';

	protected $fillable = ['name', 'info', 'logo'];

	public $timestamps = false;
}
