<?php
namespace DietcubeSample\Service;

use Dietcube\Components\LoggerAwareTrait;

class PingService
{
    use LoggerAwareTrait;

    public function getTime()
    {
        return time();
    }
}