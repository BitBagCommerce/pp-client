<?php

declare(strict_types=1);

namespace BitBag\PPClient\Model;

final class PackageContent implements SoapModelInterface
{
    private ?string $specialPackageContent = null;

    private ?string $anotherPackageContent = null;

    public function getSpecialPackageContent(): ?string
    {
        return $this->specialPackageContent;
    }

    public function setSpecialPackageContent(?string $specialPackageContent): void
    {
        $this->specialPackageContent = $specialPackageContent;
    }

    public function getAnotherPackageContent(): ?string
    {
        return $this->anotherPackageContent;
    }

    public function setAnotherPackageContent(?string $anotherPackageContent): void
    {
        $this->anotherPackageContent = $anotherPackageContent;
    }

    public function toSoapModel(): object
    {
        $soapModel = new \stdClass();

        $soapModel->zawartoscSpecjalna = $this->specialPackageContent;
        $soapModel->zawartoscInna = $this->anotherPackageContent;

        return $soapModel;
    }
}
