<?php

declare(strict_types=1);

namespace BitBag\PPClient\Model;

final class CODDelivery extends RecordedDelivery implements SoapModelInterface
{
    private ?COD $cod = null;

    private bool $posteRestante = false;

    private int $numberOfDeliveryConfirmations = 0;

    private string $category;

    private string $packageSize;

    private bool $fragile = false;

    private int $weight;

    private int $totalAmount;

    public function getCod(): ?COD
    {
        return $this->cod;
    }

    public function setCod(?COD $cod): void
    {
        $this->cod = $cod;
    }

    public function isPosteRestante(): bool
    {
        return $this->posteRestante;
    }

    public function setPosteRestante(bool $posteRestante): void
    {
        $this->posteRestante = $posteRestante;
    }

    public function getNumberOfDeliveryConfirmations(): int
    {
        return $this->numberOfDeliveryConfirmations;
    }

    public function setNumberOfDeliveryConfirmations(int $numberOfDeliveryConfirmations): void
    {
        $this->numberOfDeliveryConfirmations = $numberOfDeliveryConfirmations;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function setCategory(string $category): void
    {
        $this->category = $category;
    }

    public function getPackageSize(): string
    {
        return $this->packageSize;
    }

    public function setPackageSize(string $packageSize): void
    {
        $this->packageSize = $packageSize;
    }

    public function isFragile(): bool
    {
        return $this->fragile;
    }

    public function setFragile(bool $fragile): void
    {
        $this->fragile = $fragile;
    }

    public function getWeight(): int
    {
        return $this->weight;
    }

    public function setWeight(int $weight): void
    {
        $this->weight = $weight;
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
        $soapModel = parent::toSoapModel();

        if (null !== $this->cod) {
            $soapModel->pobranie = $this->cod->toSoapModel();
        }

        $soapModel->posteRestante = $this->posteRestante;
        $soapModel->iloscPotwierdzenOdbioru = $this->numberOfDeliveryConfirmations;
        $soapModel->kategoria = $this->category;
        $soapModel->gabaryt = $this->packageSize;
        $soapModel->ostroznie = $this->fragile;
        $soapModel->wartosc = $this->totalAmount;
        $soapModel->masa = $this->weight;

        return $soapModel;
    }
}
