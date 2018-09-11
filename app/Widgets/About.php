<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use App\Setting;

class About extends AbstractWidget
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
        $main = Setting::find(1);
        return view('widgets.about', [
            'config' => $this->config, 'main' =>$main
        ]);
    }
}
