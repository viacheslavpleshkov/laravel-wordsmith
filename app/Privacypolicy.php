<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Privacypolicy extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['content_header', 'text', 'seo_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function seo()
    {
        return $this->belongsTo('App\Seo');
    }
}
