<?php

declare(strict_types=1);

namespace BitBag\PPClient\Factory\Response;

use BitBag\PPClient\Model\Response\SendEnvelopeResponse;

interface SendEnvelopeResponseFactoryInterface
{
    public function create(object $soapResponse): SendEnvelopeResponse;
}
