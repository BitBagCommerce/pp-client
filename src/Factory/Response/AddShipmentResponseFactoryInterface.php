<?php

declare(strict_types=1);

namespace BitBag\PPClient\Factory\Response;

use BitBag\PPClient\Model\Response\AddShipmentResponse;

interface AddShipmentResponseFactoryInterface
{
    public function create(object $soapResponse): AddShipmentResponse;
}
