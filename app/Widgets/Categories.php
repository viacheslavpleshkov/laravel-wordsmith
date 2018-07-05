<?php

namespace App\Widgets;

use App\Category;
use Arrilot\Widgets\AbstractWidget;
use App\Category as Model;
class Categories extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {

        $main = Model::where('status', 1)->get();
        return view('widgets.categories', [
            'config' => $this->config,'main' => $main
        ]);
    }
}
