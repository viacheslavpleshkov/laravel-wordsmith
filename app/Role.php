<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['description',];

    public function users()
    {
        return $this->hasMany('App\User');
    }
}
