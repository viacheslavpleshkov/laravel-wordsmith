<?php

namespace App;

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
        return $this->belongsTo('App\Seo');
    }
}
