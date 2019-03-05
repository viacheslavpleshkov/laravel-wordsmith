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
	protected $fillable = [
		'icon',
		'url',
		'status'
	];

	const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';
}
