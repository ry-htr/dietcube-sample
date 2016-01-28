<?php
namespace DietcubeSample\Controller;

use Dietcube\Controller;

class PingController extends Controller
{
    public function index(){
        /** @var \DietcubeSample\Service\PingService $service */
        $service = $this->get('service.ping');

        return $this->json(['time' => $service->getTime()]);
    }
}
