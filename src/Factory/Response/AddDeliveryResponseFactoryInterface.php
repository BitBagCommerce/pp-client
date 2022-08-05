<?php

declare(strict_types=1);

namespace BitBag\PPClient\Factory\Response;

use BitBag\PPClient\Model\Response\AddDeliveryResponse;

interface AddDeliveryResponseFactoryInterface
{
    public function create(object $soapResponse): AddDeliveryResponse;
}
