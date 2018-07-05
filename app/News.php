<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $dateFormat = 'Y-m-d';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
