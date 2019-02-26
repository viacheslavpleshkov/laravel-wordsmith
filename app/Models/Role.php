<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	/**
	 * @var array
	 */
	protected $guarded = ['id'];
	/**
	 * @var string
	 */
	protected $table = 'roles';

	/**
	 * @var array
	 */
	protected $fillable = ['description'];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function users()
	{
		return $this->hasMany('App\Models\User');
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
