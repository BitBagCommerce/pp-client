<?php

declare(strict_types=1);

namespace BitBag\PPClient\Model;

final class Insurance implements SoapModelInterface
{
    private string $type;

    private float $insuranceTotal;

    private ?bool $OWUAcceptance = null;

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getInsuranceTotal(): float
    {
        return $this->insuranceTotal;
    }

    public function setInsuranceTotal(float $insuranceTotal): void
    {
        $this->insuranceTotal = $insuranceTotal;
    }

    public function isOWUAcceptance(): ?bool
    {
        return $this->OWUAcceptance;
    }

    public function setOWUAcceptance(?bool $OWUAcceptance): void
    {
        $this->OWUAcceptance = $OWUAcceptance;
    }

    public function toSoapModel(): object
    {
        $soapModel = new \stdClass();

        $soapModel->rodzaj = $this->type;
        $soapModel->kwota = $this->insuranceTotal;
        $soapModel->akceptacjaOWU = $this->OWUAcceptance;

        return $soapModel;
    }
}
