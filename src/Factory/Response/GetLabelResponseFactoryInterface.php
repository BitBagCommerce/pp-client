<?php

declare(strict_types=1);

namespace BitBag\PPClient\Factory\Response;

use BitBag\PPClient\Model\Response\GetLabelResponse;

interface GetLabelResponseFactoryInterface
{
    public function create(object $soapResponse): GetLabelResponse;
}
