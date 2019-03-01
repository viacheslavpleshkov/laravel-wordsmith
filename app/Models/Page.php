<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
	/**
	 * @var array
	 */
	protected $guarded = ['id'];
	/**
	 * @var string
	 */
	protected $table = 'pages';

	/**
	 * @var array
	 */
	protected $fillable = ['title', 'url', 'content_header', 'text', 'seo_id'];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function seo()
	{
		return $this->belongsTo(Seo::class);
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
	public function scopePageHome($query)
	{
		return $query->find(1);
	}

	/**
	 * @param $query
	 * @return mixed
	 */
	public function scopePageBlog($query)
	{
		return $query->find(2);
	}

	/**
	 * @param $query
	 * @return mixed
	 */
	public function scopePageAbout($query)
	{
		return $query->find(3);
	}

	/**
	 * @param $query
	 * @return mixed
	 */
	public function scopePageContact($query)
	{
		return $query->find(4);
	}

	/**
	 * @param $query
	 * @return mixed
	 */
	public function scopePagePrivacyPolicy($query)
	{
		return $query->find(5);
	}

	/**
	 * @param $query
	 * @return mixed
	 */
	public function scopePageSearch($query)
	{
		return $query->find(8);
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
