<?php

declare(strict_types=1);

namespace BitBag\PPClient\Factory\Client;

use BitBag\PPClient\Client\PPClientConfiguration;

interface SoapClientFactoryInterface
{
    public function create(PPClientConfiguration $configuration): \SoapClient;
}
