<?php

declare(strict_types=1);

namespace BitBag\PPClient\Client;

final class PPClientConfiguration implements PPClientConfigurationInterface
{
    public function __construct(
        private string $wsdlPath,
        private string $login,
        private string $password
    ) {
    }

    public function getWsdlPath(): string
    {
        return $this->wsdlPath;
    }

    public function getLogin(): string
    {
        return $this->login;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
}
