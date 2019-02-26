<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sociallink extends Model
{
	/**
	 * @var array
	 */
	protected $guarded = ['id'];
	/**
	 * @var string
	 */
	protected $table = 'sociallinks';

	/**
	 * @var array
	 */
	protected $fillable = ['icon', 'url', 'status'];

	/**
	 * @param $query
	 * @return mixed
	 */
	public function scopeStatus($query)
	{
		return $query->where('status', 1);
	}
}
