<?php declare(strict_types=1);

namespace BitBag\PPClient\Model;

final class BusinessDeliveryConfirmation implements SoapModelInterface
{
    private string $type;

    private int $totalAmount;

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getTotalAmount(): int
    {
        return $this->totalAmount;
    }

    public function setTotalAmount(int $totalAmount): void
    {
        $this->totalAmount = $totalAmount;
    }

    public function toSoapModel(): object
    {
        $soapModel = new \stdClass();

        $soapModel->sposob = $this->type;
        $soapModel->ilosc = $this->totalAmount;

        return $soapModel;
    }

}
