<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class OurActivities extends AbstractWidget
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

        return view('widgets.our_activities', [
            'config' => $this->config,
        ]);
    }
}
