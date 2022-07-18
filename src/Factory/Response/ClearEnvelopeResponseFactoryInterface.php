<?php

declare(strict_types=1);

namespace BitBag\PPClient\Factory\Response;

use BitBag\PPClient\Model\Response\ClearEnvelopeResponse;

interface ClearEnvelopeResponseFactoryInterface
{
    public function create(object $soapResponse): ClearEnvelopeResponse;
}
