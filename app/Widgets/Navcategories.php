<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use App\Category;

class Navcategories extends AbstractWidget
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
        $main = Category::where('status', 1)->get();
        return view('widgets.navcategories', [
            'config' => $this->config, 'main' => $main
        ]);
    }
}
