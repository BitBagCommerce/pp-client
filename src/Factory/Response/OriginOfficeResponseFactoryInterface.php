<?php

declare(strict_types=1);

namespace BitBag\PPClient\Factory\Response;

use BitBag\PPClient\Model\Response\GetOriginOfficeResponse;

interface OriginOfficeResponseFactoryInterface
{
    public function create(object $soapResponse): GetOriginOfficeResponse;
}
