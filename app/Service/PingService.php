<?php
/**
 * Created by PhpStorm.
 * User: ry-hattori
 * Date: 2016/01/26
 * Time: 16:10
 */

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