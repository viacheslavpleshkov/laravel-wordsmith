<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'article_id', 'text', 'status'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
