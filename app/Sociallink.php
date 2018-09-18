<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sociallink extends Model
{
    protected $fillable = ['icon', 'url', 'status'];
}
