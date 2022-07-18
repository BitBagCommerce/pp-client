<?php

declare(strict_types=1);

namespace BitBag\PPClient\Model;

interface SoapModelInterface
{
    public function toSoapModel(): object;
}
