<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issuer extends Model
{
    protected $table = 'issuers';

	protected $fillable = ['name','location', 'phone', 'email', 'website', 'info', 'logo'];

	public $timestamps = false;
}
