<?php

declare(strict_types=1);

namespace BitBag\PPClient\Client;

use BitBag\PPClient\Model\Request\ShipmentRequest;

interface PPClientInterface
{
    public function addShipment(ShipmentRequest $shipmentRequest): mixed;
}
