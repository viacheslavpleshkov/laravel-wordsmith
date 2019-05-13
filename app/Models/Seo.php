<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Seo
 * @package App\Models
 */
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
	protected $fillable = [
		'title',
		'description',
		'keyword',
		'status'
	];

	const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function categories()
	{
		return $this->hasMany(Category::class);
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function articles()
	{
		return $this->hasMany(Article::class);
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function page()
	{
		return $this->hasMany(Article::class);
	}
}
