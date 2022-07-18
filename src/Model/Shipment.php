<?php

declare(strict_types=1);

namespace BitBag\PPClient\Model;

abstract class Shipment implements SoapModelInterface
{
    private ?PaidByReceiver $paidByReceiver = null;

    private ?string $costCenter = null;

    private string $guid;

    private string $packetGuid;

    private string $packagingGuid;

    private string $description;

    private \DateTimeInterface $plannedShippingDate;

    public function getPaidByReceiver(): ?PaidByReceiver
    {
        return $this->paidByReceiver;
    }

    public function setPaidByReceiver(?PaidByReceiver $paidByReceiver): void
    {
        $this->paidByReceiver = $paidByReceiver;
    }

    public function getCostCenter(): ?string
    {
        return $this->costCenter;
    }

    public function setCostCenter(?string $costCenter): void
    {
        $this->costCenter = $costCenter;
    }

    public function getGuid(): string
    {
        return $this->guid;
    }

    public function setGuid(string $guid): void
    {
        $this->guid = $guid;
    }

    public function getPacketGuid(): string
    {
        return $this->packetGuid;
    }

    public function setPacketGuid(string $packetGuid): void
    {
        $this->packetGuid = $packetGuid;
    }

    public function getPackagingGuid(): string
    {
        return $this->packagingGuid;
    }

    public function setPackagingGuid(string $packagingGuid): void
    {
        $this->packagingGuid = $packagingGuid;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getPlannedShippingDate(): \DateTimeInterface
    {
        return $this->plannedShippingDate;
    }

    public function setPlannedShippingDate(\DateTimeInterface $plannedShippingDate): void
    {
        $this->plannedShippingDate = $plannedShippingDate;
    }

    public function toSoapModel(): object
    {
        $soapModel = new \stdClass();

        $soapModel->oplacaOdbiorca = $this->paidByReceiver?->toSoapModel();
        $soapModel->mpk = $this->costCenter;
        $soapModel->guid = $this->guid;
        $soapModel->pakietGuid = $this->packetGuid;
        $soapModel->opakowanieGuid = $this->packagingGuid;
        $soapModel->opis = $this->description;
        $soapModel->planowanaDataNadania = $this->plannedShippingDate->format('Y-m-d');

        return $soapModel;
    }
}
