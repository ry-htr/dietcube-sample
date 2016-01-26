<?php
namespace DietcubeSample\Controller;

use Dietcube\Controller;

class PingController extends Controller
{
    public function index()
    {
        $service = $this->get('service.ping');

        return $this->render('ping', [
            'time' => $service->getTime(),
        ]);
    }
}