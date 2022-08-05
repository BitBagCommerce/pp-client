<?php

declare(strict_types=1);

namespace BitBag\PPClient\Factory\Response;

use BitBag\PPClient\Model\Response\AddDeliveryResponse;

interface AddShipmentResponseFactoryInterface
{
    public function create(object $soapResponse): AddDeliveryResponse;
}
