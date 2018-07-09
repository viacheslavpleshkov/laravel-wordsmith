<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use App\News as Model;

class News extends AbstractWidget
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
        $main = Model::where('status', 1)->orderBy('id', 'desc')->limit(3)->get();
        return view('widgets.news', [
            'config' => $this->config, 'main' => $main
        ]);
    }
}
