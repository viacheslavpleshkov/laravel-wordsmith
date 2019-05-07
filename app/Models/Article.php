<?php

namespace App\Models;

//use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
//	use Searchable;
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
	protected $fillable = [
		'title',
		'url',
		'images',
		'text',
		'category_id',
		'seo_id',
		'views',
		'slide',
		'status',
		'user_id'
	];

	const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';

	/**
	 * @return string
	 */
	public function searchableAs()
	{
		return 'articles_index';
	}

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
		return $this->belongsTo(Category::class);
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
