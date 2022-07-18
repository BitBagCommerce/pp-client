<?php

declare(strict_types=1);

namespace BitBag\PPClient\Model;

final class AddressLabel
{
    private string $pdfContent;

    private string $shippingNumber;

    private string $guid;

    public function getPdfContent(): string
    {
        return $this->pdfContent;
    }

    public function setPdfContent(string $pdfContent): void
    {
        $this->pdfContent = $pdfContent;
    }

    public function getShippingNumber(): string
    {
        return $this->shippingNumber;
    }

    public function setShippingNumber(string $shippingNumber): void
    {
        $this->shippingNumber = $shippingNumber;
    }

    public function getGuid(): string
    {
        return $this->guid;
    }

    public function setGuid(string $guid): void
    {
        $this->guid = $guid;
    }
}
