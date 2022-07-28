<?php

declare(strict_types=1);

namespace BitBag\PPClient\Model;

class PostOffice implements SoapModelInterface
{
    private ?GeographicLocation $location;

    private ?DeliveryPath $deliveryPath;

    private int $id;

    private string $prefix;

    private string $name;

    private ?string $province;

    private ?string $district;

    private string $place;

    private string $postCode;

    private string $city;

    private string $street;

    private string $houseNumber;

    private string $flatNumber;

    private string $printoutName;

    private bool $pickupPoint;

    private bool $SMSnotification;

    private bool $businessDeliveryPlusPickupPoint;

    private bool $businessDeliveryPickupPoint;

    private PostalNetworkEnum $postalNetwork;

    private string $ZPOid;

    public function getLocation(): GeographicLocation
    {
        return $this->location;
    }

    public function setLocation(GeographicLocation $location): void
    {
        $this->location = $location;
    }

    public function getDeliveryPath(): DeliveryPath
    {
        return $this->deliveryPath;
    }

    public function setDeliveryPath(DeliveryPath $deliveryPath): void
    {
        $this->deliveryPath = $deliveryPath;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getPrefix(): string
    {
        return $this->prefix;
    }

    public function setPrefix(string $prefix): void
    {
        $this->prefix = $prefix;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getProvince(): ?string
    {
        return $this->province;
    }

    public function setProvince(?string $province): void
    {
        $this->province = $province;
    }

    public function getDistrict(): ?string
    {
        return $this->district;
    }

    public function setDistrict(?string $district): void
    {
        $this->district = $district;
    }

    public function getPlace(): string
    {
        return $this->place;
    }

    public function setPlace(string $place): void
    {
        $this->place = $place;
    }

    public function getPostCode(): string
    {
        return $this->postCode;
    }

    public function setPostCode(string $postCode): void
    {
        $this->postCode = $postCode;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function setStreet(string $street): void
    {
        $this->street = $street;
    }

    public function getHouseNumber(): string
    {
        return $this->houseNumber;
    }

    public function setHouseNumber(string $houseNumber): void
    {
        $this->houseNumber = $houseNumber;
    }

    public function getFlatNumber(): string
    {
        return $this->flatNumber;
    }

    public function setFlatNumber(string $flatNumber): void
    {
        $this->flatNumber = $flatNumber;
    }

    public function getPrintoutName(): string
    {
        return $this->printoutName;
    }

    public function setPrintoutName(string $printoutName): void
    {
        $this->printoutName = $printoutName;
    }

    public function isPickupPoint(): bool
    {
        return $this->pickupPoint;
    }

    public function setPickupPoint(bool $pickupPoint): void
    {
        $this->pickupPoint = $pickupPoint;
    }

    public function isSMSnotification(): bool
    {
        return $this->SMSnotification;
    }

    public function setSMSnotification(bool $SMSnotification): void
    {
        $this->SMSnotification = $SMSnotification;
    }

    public function isBusinessDeliveryPlusPickupPoint(): bool
    {
        return $this->businessDeliveryPlusPickupPoint;
    }

    public function setBusinessDeliveryPlusPickupPoint(bool $businessDeliveryPlusPickupPoint): void
    {
        $this->businessDeliveryPlusPickupPoint = $businessDeliveryPlusPickupPoint;
    }

    public function isBusinessDeliveryPickupPoint(): bool
    {
        return $this->businessDeliveryPickupPoint;
    }

    public function setBusinessDeliveryPickupPoint(bool $businessDeliveryPickupPoint): void
    {
        $this->businessDeliveryPickupPoint = $businessDeliveryPickupPoint;
    }

    public function getPostalNetwork(): PostalNetworkEnum
    {
        return $this->postalNetwork;
    }

    public function setPostalNetwork(PostalNetworkEnum $postalNetwork): void
    {
        $this->postalNetwork = $postalNetwork;
    }

    public function getZPOid(): string
    {
        return $this->ZPOid;
    }

    public function setZPOid(string $ZPOid): void
    {
        $this->ZPOid = $ZPOid;
    }

    public function toSoapModel(): object
    {
        $soapModel = new \stdClass();

        $soapModel->lokalizacjaGeograficzna = $this->location->toSoapModel();
        $soapModel->deliveryPath = $this->deliveryPath;
        $soapModel->id = $this->id;
        $soapModel->prefixNazwy = $this->prefix;
        $soapModel->nazwa = $this->name;
        $soapModel->wojewodztwo = $this->province;
        $soapModel->powiat = $this->district;
        $soapModel->miejsce = $this->place;
        $soapModel->kodPocztowy = $this->postCode;
        $soapModel->miejscowosc = $this->city;
        $soapModel->ulica = $this->street;
        $soapModel->numerDomu = $this->houseNumber;
        $soapModel->numerLokalu = $this->flatNumber;
        $soapModel->nazwaWydruk = $this->printoutName;
        $soapModel->punktWydaniaEPrzesylki = $this->pickupPoint;
        $soapModel->powiadomienieSMS = $this->SMSnotification;
        $soapModel->punktWydaniaPrzesylkiBiznesowejPlus = $this->businessDeliveryPlusPickupPoint;
        $soapModel->punktWydaniaPrzesylkiBiznesowej = $this->businessDeliveryPickupPoint;

        return $soapModel;
    }
}
