<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{

    /**
     * @var array
     */

    protected $fillable = ['content_header', 'text', 'footer_about'];

}
