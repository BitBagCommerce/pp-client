<?php

declare(strict_types=1);

namespace BitBag\PPClient\Model;

final class Error
{
    private int $errorNumber;

    private string $errorDesc;

    private ?string $guid = null;

    public function getErrorNumber(): int
    {
        return $this->errorNumber;
    }

    public function setErrorNumber(int $errorNumber): void
    {
        $this->errorNumber = $errorNumber;
    }

    public function getErrorDesc(): string
    {
        return $this->errorDesc;
    }

    public function setErrorDesc(string $errorDesc): void
    {
        $this->errorDesc = $errorDesc;
    }

    public function getGuid(): ?string
    {
        return $this->guid;
    }

    public function setGuid(?string $guid): void
    {
        $this->guid = $guid;
    }
}
