<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['description', 'keyword', 'url'];
}
