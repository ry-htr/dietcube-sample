<?php

namespace DietcubeSample;

use Dietcube\RouteInterface;
use Pimple\Container;

class Route implements RouteInterface
{
    /**
     * {@inheritDoc}
     */
    public function definition(Container $container)
    {
        /*
         * ここの書き方は
         * [nikic/FastRoute](https://github.com/nikic/FastRoute)を参照
         */
        return [
            ['GET', '/', 'Top::index'],
            [['GET', 'POST'], '/ping', 'Ping::index'],
        ];
    }
}
