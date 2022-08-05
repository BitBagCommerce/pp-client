<?php

declare(strict_types=1);

namespace BitBag\PPClient\Model;

final class COD implements SoapModelInterface
{
    public const COD_TYPE_POSTAL_ORDER = 'PRZEKAZ';

    public const COD_TYPE_BANK_TRANSFER = 'RACHUNEK_BANKOWY';

    private string $codType = self::COD_TYPE_POSTAL_ORDER;

    private int $totalAmount;

    private ?string $nrb = null;

    private ?string $description = null;

    private bool $toBeCheckedByReceiver;

    public function getCodType(): string
    {
        return $this->codType;
    }

    public function setCodType(string $codType): void
    {
        $this->codType = $codType;
    }

    public function getTotalAmount(): int
    {
        return $this->totalAmount;
    }

    public function setTotalAmount(int $totalAmount): void
    {
        $this->totalAmount = $totalAmount;
    }

    public function getNrb(): ?string
    {
        return $this->nrb;
    }

    public function setNrb(?string $nrb): void
    {
        $this->nrb = $nrb;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function isToBeCheckedByReceiver(): bool
    {
        return $this->toBeCheckedByReceiver;
    }

    public function setToBeCheckedByReceiver(bool $toBeCheckedByReceiver): void
    {
        $this->toBeCheckedByReceiver = $toBeCheckedByReceiver;
    }

    public function toSoapModel(): object
    {
        $soapModel = new \stdClass();

        $soapModel->sposobPobrania = $this->codType;
        $soapModel->kwotaPobrania = $this->totalAmount;
        $soapModel->nrb = $this->nrb;
        $soapModel->tytulem = $this->description;
        $soapModel->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = $this->toBeCheckedByReceiver;

        return $soapModel;
    }
}
