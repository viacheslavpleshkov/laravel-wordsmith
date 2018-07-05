<?php

namespace App\Widgets;

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
        //
        $main = ['test1','test2','test3','test4','test5'];
        return view('widgets.categories', [
            'config' => $this->config,'main' => $main
        ]);
    }
}
