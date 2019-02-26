<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
	/**
	 * @var array
	 */
	protected $guarded = ['id'];
	/**
	 * @var string
	 */
	protected $table = 'seos';

	/**
	 * @var array
	 */
	protected $fillable = ['title', 'description', 'keyword', 'status'];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function categories()
	{
		return $this->hasMany('App\Models\Category');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function articles()
	{
		return $this->hasMany('App\Models\Article');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function page()
	{
		return $this->hasMany('App\Models\Blog');
	}

	/**
	 * @param $query
	 * @return mixed
	 */
	public function scopeDesc($query)
	{
		return $query->orderBy('id', 'desc');
	}
}
