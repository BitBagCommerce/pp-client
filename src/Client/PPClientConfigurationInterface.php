<?php

declare(strict_types=1);

namespace BitBag\PPClient\Client;

interface PPClientConfigurationInterface
{
    public function getWsdlPath(): string;

    public function getLogin(): string;

    public function getPassword(): string;
}
