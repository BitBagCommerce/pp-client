<?php

declare(strict_types=1);

namespace BitBag\PPClient\Factory\Client;

use BitBag\PPClient\Client\PPClientConfiguration;

final class SoapClientFactory implements SoapClientFactoryInterface
{
    public function create(PPClientConfiguration $configuration): \SoapClient
    {
        return new \SoapClient(
            $configuration->getWsdlPath(),
            [
                'login' => $configuration->getLogin(),
                'password' => $configuration->getPassword(),
            ]
        );
    }
}
