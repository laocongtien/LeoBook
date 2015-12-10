<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';

	protected $fillable = ['name', 'author_id', 'price','discount','invent','publishing_date','issuer_id','publisher_id','type_id','cate_id','language_id','size','cover_id','image','page','info','rate','ratecount','qty_saled'];

	//public $timestamps = true;

	public function author() {
		return $this->belongsTo('App\Author');
	}
	public function issuer() {
		return $this->belongsTo('App\Issuer');
	}
	public function publisher() {
		return $this->belongsTo('App\Publisher');
	}
	public function type() {
		return $this->belongsTo('App\Type');
	}
	public function cate() {
		return $this->belongsTo('App\Cate');
	}
	public function language() {
		return $this->belongsTo('App\Other');
	}
	public function cover() {
		return $this->belongsTo('App\Other');
	}
}
