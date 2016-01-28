<?php
/**
 *
 */

namespace DietcubeSample;

use Dietcube\Application as DCApplication;
use Pimple\Container;
use DietcubeSample\Service\SampleService;
use DietcubeSample\Service\PingService;

class Application extends DCApplication
{
    public function init(Container $container)
    {
        // do something before boot
    }

    public function config(Container $container)
    {
        // setup container or services here
        $container['service.sample'] = function () use ($container) {
            $sample_service = new SampleService();
            $sample_service->setLogger($container['logger']);

            return $sample_service;
        };

        $container['service.ping'] = function () use ($container) {
            $ping_service = new PingService();
            $ping_service->setLogger($container['logger']);

            return $ping_service;
        };
    }
}
