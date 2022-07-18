<?php

declare(strict_types=1);

namespace BitBag\PPClient\Model;

abstract class RecordedDelivery extends Shipment implements SoapModelInterface
{
    public const CATEGORY_ECONOMY = 'EKONOMICZNA';

    public const CATEGORY_PRIORITY = 'PRIORYTETOWA';

    private Address $address;

    private ?Address $sender = null;

    private ?RelatedToAllegro $relatedToAllegro = null;

    private ?string $shippingNumber = null;

    private ?string $signature = null;

    private ?string $hearingDate = null;

    private ?string $deliveryType = null;

    public function getAddress(): Address
    {
        return $this->address;
    }

    public function setAddress(Address $address): void
    {
        $this->address = $address;
    }

    public function getSender(): ?Address
    {
        return $this->sender;
    }

    public function setSender(?Address $sender): void
    {
        $this->sender = $sender;
    }

    public function getRelatedToAllegro(): ?RelatedToAllegro
    {
        return $this->relatedToAllegro;
    }

    public function setRelatedToAllegro(?RelatedToAllegro $relatedToAllegro): void
    {
        $this->relatedToAllegro = $relatedToAllegro;
    }

    public function getShippingNumber(): ?string
    {
        return $this->shippingNumber;
    }

    public function setShippingNumber(?string $shippingNumber): void
    {
        $this->shippingNumber = $shippingNumber;
    }

    public function getSignature(): ?string
    {
        return $this->signature;
    }

    public function setSignature(?string $signature): void
    {
        $this->signature = $signature;
    }

    public function getHearingDate(): ?string
    {
        return $this->hearingDate;
    }

    public function setHearingDate(?string $hearingDate): void
    {
        $this->hearingDate = $hearingDate;
    }

    public function getDeliveryType(): ?string
    {
        return $this->deliveryType;
    }

    public function setDeliveryType(?string $deliveryType): void
    {
        $this->deliveryType = $deliveryType;
    }

    public function toSoapModel(): object
    {
        $soapModel = parent::toSoapModel();

        $soapModel->adres = $this->address->toSoapModel();
        $soapModel->nadawca = $this->sender?->toSoapModel();
        $soapModel->relatedToAllegro = $this->relatedToAllegro?->toSoapModel();
        $soapModel->numerNadania = $this->shippingNumber;
        $soapModel->sygnatura = $this->signature;
        $soapModel->terminSprawy = $this->hearingDate;
        $soapModel->rodzaj = $this->deliveryType;

        return $soapModel;
    }
}
