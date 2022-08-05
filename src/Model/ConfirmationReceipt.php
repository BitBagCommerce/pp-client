<?php

declare(strict_types=1);

namespace BitBag\PPClient\Model;

final class ConfirmationReceipt implements SoapModelInterface
{
    private int $count;

    private string $method;

    public function getCount(): int
    {
        return $this->count;
    }

    public function setCount(int $count): void
    {
        $this->count = $count;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function setMethod(string $method): void
    {
        $this->method = $method;
    }

    public function toSoapModel(): object
    {
        $soapModel = new \stdClass();

        $soapModel->ilosc = $this->count;
        $soapModel->sposobPotwierdzeniaOdbioru = $this->method;

        return $soapModel;
    }
}
