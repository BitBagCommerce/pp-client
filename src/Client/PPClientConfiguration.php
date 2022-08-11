<?php

declare(strict_types=1);

namespace BitBag\PPClient\Client;

final class PPClientConfiguration implements PPClientConfigurationInterface
{
    private string $wsdlPath;

    private string $login;

    private string $password;

    public function __construct(
        string $wsdlPath,
        string $login,
        string $password
    ) {
        $this->password = $password;
        $this->login = $login;
        $this->wsdlPath = $wsdlPath;
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
