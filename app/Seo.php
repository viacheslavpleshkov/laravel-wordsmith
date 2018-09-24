<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['title', 'description', 'keyword', 'status'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function categories()
    {
        return $this->hasMany('App\Category');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articles()
    {
        return $this->hasMany('App\Article');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function page()
    {
        return $this->hasMany('App\Blog');
    }
}
