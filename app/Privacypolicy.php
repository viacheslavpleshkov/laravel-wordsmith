<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Privacypolicy extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['content_header', 'text'];
}
