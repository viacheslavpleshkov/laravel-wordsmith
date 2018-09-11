<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use App\Sociallink as Model;

class Sociallink extends AbstractWidget
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
        $sociallink = Model::where('status', 1)->get();
        return view('widgets.sociallink', [
            'config' => $this->config, 'sociallink' => $sociallink
        ]);
    }
}
