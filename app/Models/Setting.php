<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Setting
 * @package App\Models
 */
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
	protected $fillable = [
		'paginate_site',
		'paginate_admin',
		'contactform',
		'footer_about'
	];

	const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';
}
