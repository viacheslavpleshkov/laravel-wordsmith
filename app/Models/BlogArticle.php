<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogArticle extends Model
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
		return $this->belongsTo(Seo::class);
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function category()
	{
		return $this->belongsTo(BlogCategory::class);
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user()
	{
		return $this->belongsTo(User::class);
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
	 * @return mixed
	 */
	public function scopeSlide($query)
	{
		return $query->where('slide', 1);
	}

	/**
	 * @param $query
	 * @param $search
	 * @return mixed
	 */
	public function scopeSearch($query, $search)
	{
		return $query->where('title', 'like', "%$search%");
	}

	/**
	 * @param $query
	 * @param $url
	 * @return mixed
	 */
	public function scopeFindUrl($query, $url)
	{
		return $query->where('url', $url);
	}

	/**
	 * @param $query
	 * @param $id
	 * @return mixed
	 */
	public function scopeFindCategory($query, $id)
	{
		return $query->where('category_id', $id);
	}

	/**
	 * @param $query
	 * @param $id
	 * @return mixed
	 */
	public function scopePreviousPost($query, $id)
	{
		return $query->where('id', '<', $id)->orderBy('id', 'desc');
	}

	/**
	 * @param $query
	 * @param $id
	 * @return mixed
	 */
	public function scopeNextPost($query, $id)
	{
		return $query->where('id', '>', $id)->orderBy('id');
	}

	/**
	 * @param $query
	 * @return mixed
	 */
	public function scopeDesc($query)
	{
		return $query->orderBy('id', 'desc');
	}

	/**
	 * @param $query
	 * @return mixed
	 */
	public function scopeViews($query)
	{
		return $query->orderBy('views', 'desc');
	}
}
