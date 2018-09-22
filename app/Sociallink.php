<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sociallink extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['icon', 'url', 'status'];
}
