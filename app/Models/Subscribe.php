<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
	/**
	 * @var array
	 */
	protected $guarded = ['id'];
	/**
	 * @var string
	 */
	protected $table = 'subscribes';

	/**
	 * @var array
	 */
	protected $fillable = ['email', 'status'];

	/**
	 * @param $query
	 * @return mixed
	 */
	public function scopeDesc($query)
	{
		return $query->orderBy('id', 'desc');
	}
}
