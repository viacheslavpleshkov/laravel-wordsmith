<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use App\Article;

class Popularposts extends AbstractWidget
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
        $main = Article::where('status', 1)->orderBy('views', 'desc')->limit(6)->get();
        return view('widgets.popularposts', [
            'config' => $this->config, 'main' => $main
        ]);
    }
}
