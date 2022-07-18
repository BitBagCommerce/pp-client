<?php

declare(strict_types=1);

namespace BitBag\PPClient\Model;

use BitBag\PPClient\Model\Response\ErrorAwareResponseInterface;

final class AddShipmentResponseItem implements ErrorAwareResponseInterface
{
    /** @var Error[] */
    private array $errors = [];

    private ?string $guid = null;

    private ?string $shippingNumber = null;

    private ?string $receptionTransactionNumber = null;

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function setErrors(array $errors): void
    {
        $this->errors = $errors;
    }

    public function getGuid(): ?string
    {
        return $this->guid;
    }

    public function setGuid(?string $guid): void
    {
        $this->guid = $guid;
    }

    public function getShippingNumber(): ?string
    {
        return $this->shippingNumber;
    }

    public function setShippingNumber(?string $shippingNumber): void
    {
        $this->shippingNumber = $shippingNumber;
    }

    public function getReceptionTransactionNumber(): ?string
    {
        return $this->receptionTransactionNumber;
    }

    public function setReceptionTransactionNumber(?string $receptionTransactionNumber): void
    {
        $this->receptionTransactionNumber = $receptionTransactionNumber;
    }
}
