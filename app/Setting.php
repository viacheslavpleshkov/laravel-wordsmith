<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
	/**
	 * @var array
	 */
	protected $guarded = ['id'];
	/**
	 * @var string
	 */
	protected $table = 'settings';

	/**
	 * @var array
	 */
	protected $fillable = ['paginate_site', 'paginate_admin', 'contactform', 'footer_about'];
}
