<?php

declare(strict_types=1);

namespace BitBag\PPClient\Factory\Response;

use BitBag\PPClient\Model\Response\GetOriginOfficeResponse;

interface GetOriginOfficeResponseFactoryInterface
{
    public function create(object $soapResponse): GetOriginOfficeResponse;
}
