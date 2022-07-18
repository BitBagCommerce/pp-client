<?php

declare(strict_types=1);

namespace BitBag\PPClient\Model;

class Address implements SoapModelInterface
{
    private string $name;

    private ?string $alternativeName = null;

    private string $street;

    private ?string $houseNumber = null;

    private ?string $flatNumber = null;

    private string $city;

    private string $postCode;

    private string $country = 'Polska';

    private ?string $phoneNumber = null;

    private string $email;

    private string $mobileNumber;

    private ?string $contactPerson = null;

    private ?string $nip = null;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getAlternativeName(): ?string
    {
        return $this->alternativeName;
    }

    public function setAlternativeName(?string $alternativeName): void
    {
        $this->alternativeName = $alternativeName;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function setStreet(string $street): void
    {
        $this->street = $street;
    }

    public function getHouseNumber(): ?string
    {
        return $this->houseNumber;
    }

    public function setHouseNumber(?string $houseNumber): void
    {
        $this->houseNumber = $houseNumber;
    }

    public function getFlatNumber(): ?string
    {
        return $this->flatNumber;
    }

    public function setFlatNumber(?string $flatNumber): void
    {
        $this->flatNumber = $flatNumber;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    public function getPostCode(): string
    {
        return $this->postCode;
    }

    public function setPostCode(string $postCode): void
    {
        $this->postCode = $postCode;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(?string $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getMobileNumber(): string
    {
        return $this->mobileNumber;
    }

    public function setMobileNumber(string $mobileNumber): void
    {
        $this->mobileNumber = $mobileNumber;
    }

    public function getContactPerson(): ?string
    {
        return $this->contactPerson;
    }

    public function setContactPerson(?string $contactPerson): void
    {
        $this->contactPerson = $contactPerson;
    }

    public function getNip(): ?string
    {
        return $this->nip;
    }

    public function setNip(?string $nip): void
    {
        $this->nip = $nip;
    }

    public function toSoapModel(): object
    {
        $soapModel = new \stdClass();

        $soapModel->nazwa = $this->name;
        $soapModel->nazwa2 = $this->alternativeName;
        $soapModel->ulica = $this->street;
        $soapModel->numerDomu = $this->houseNumber;
        $soapModel->numerLokalu = $this->flatNumber;
        $soapModel->miejscowosc = $this->city;
        $soapModel->kodPocztowy = $this->postCode;
        $soapModel->kraj = $this->country;
        $soapModel->telefon = $this->phoneNumber;
        $soapModel->email = $this->email;
        $soapModel->mobile = $this->mobileNumber;
        $soapModel->osobaKontaktowa = $this->contactPerson;
        $soapModel->nip = $this->nip;

        return $soapModel;
    }
}
