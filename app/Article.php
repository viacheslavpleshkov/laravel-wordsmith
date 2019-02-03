<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	/**
	 * @var array
	 */
	protected $guarded = ['id'];
	/**
	 * @var string
	 */
	protected $table = 'articles';

	/**
	 * @var array
	 */
	protected $fillable = ['title', 'url', 'images', 'text', 'category_id', 'seo_id', 'views', 'slide', 'status', 'user_id'];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function seo()
	{
		return $this->belongsTo('App\Seo');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function category()
	{
		return $this->belongsTo('App\Category');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user()
	{
		return $this->belongsTo('App\User');
	}

	/**
	 * @param $query
	 * @return mixed
	 */
	public function scopeStatus($query)
	{
		return $query->where('status', 1);
	}

	/**
	 * @param $query
	 * @param $url
	 * @return mixed
	 */
	public function scopeFindUrl($query, $url)
	{
		return $query->where('url', $url)->first();
	}

	/**
	 * @param $query
	 * @param $id
	 * @return mixed
	 */
	public function scopePreviousPost($query, $id)
	{
		return $query->where('id', '<', $id)->orderBy('id', 'desc')->first();
	}

	/**
	 * @param $query
	 * @param $id
	 * @return mixed
	 */
	public function scopeNextPost($query, $id)
	{
		return $query->where('id', '>', $id)->orderBy('id')->first();
	}
}
