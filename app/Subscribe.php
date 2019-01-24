<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
	/**
	 * @var array
	 */
	protected $guarded = ['id'];
	/**
	 * @var string
	 */
	protected $table = 'subscribes';

    /**
     * @var array
     */
    protected $fillable = ['email','status'];
}
