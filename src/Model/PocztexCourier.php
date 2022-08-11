<?php

declare(strict_types=1);

namespace BitBag\PPClient\Model;

final class PocztexCourier extends Pocztex implements SoapModelInterface
{
    /** @var Pocztex[] */
    private array $subPackages = [];

    private ?PostOffice $deliveryPackagePoint = null;

    private ?PostOffice $senderPackagePoint = null;

    private bool $envelopePocztex = false;

    private ?string $deliveryTime = null;

    private ?\DateTime $deliveryAtSelectedDate = null;

    public function getSubPackages(): array
    {
        return $this->subPackages;
    }

    public function setSubPackages(array $subPackages): void
    {
        $this->subPackages = $subPackages;
    }

    public function getDeliveryPackagePoint(): ?PostOffice
    {
        return $this->deliveryPackagePoint;
    }

    public function setDeliveryPackagePoint(?PostOffice $deliveryPackagePoint): void
    {
        $this->deliveryPackagePoint = $deliveryPackagePoint;
    }

    public function getSenderPackagePoint(): ?PostOffice
    {
        return $this->senderPackagePoint;
    }

    public function setSenderPackagePoint(?PostOffice $senderPackagePoint): void
    {
        $this->senderPackagePoint = $senderPackagePoint;
    }

    public function isEnvelopePocztex(): bool
    {
        return $this->envelopePocztex;
    }

    public function setEnvelopePocztex(bool $envelopePocztex): void
    {
        $this->envelopePocztex = $envelopePocztex;
    }

    public function getDeliveryTime(): ?string
    {
        return $this->deliveryTime;
    }

    public function setDeliveryTime(?string $deliveryTime): void
    {
        $this->deliveryTime = $deliveryTime;
    }

    public function getDeliveryAtSelectedDate(): ?\DateTime
    {
        return $this->deliveryAtSelectedDate;
    }

    public function setDeliveryAtSelectedDate(?\DateTime $deliveryAtSelectedDate): void
    {
        $this->deliveryAtSelectedDate = $deliveryAtSelectedDate;
    }

    public function toSoapModel(): object
    {
        $soapModel = parent::toSoapModel();

        $soapModel->subPrzesylka = $this->subPackages;

        if (null !== $this->deliveryPackagePoint) {
            $soapModel->punktOdbioru = $this->deliveryPackagePoint->toSoapModel();
        }

        if (null !== $this->senderPackagePoint) {
            $soapModel->punktNadania = $this->senderPackagePoint->toSoapModel();
        }

        $soapModel->kopertaPocztex = $this->envelopePocztex;
        $soapModel->godzinaDoreczenia = $this->deliveryTime;
        $soapModel->doreczenieWeWskazanymDniu = $this->deliveryAtSelectedDate;

        return $soapModel;
    }
}
