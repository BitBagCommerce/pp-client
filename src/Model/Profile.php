<?php

declare(strict_types=1);

namespace BitBag\PPClient\Model;

final class Profile extends Address implements SoapModelInterface
{
    private int $profileId;

    private string $shortName;

    private string $faxNumber;

    public function getProfileId(): int
    {
        return $this->profileId;
    }

    public function setProfileId(int $profileId): void
    {
        $this->profileId = $profileId;
    }

    public function getShortName(): string
    {
        return $this->shortName;
    }

    public function setShortName(string $shortName): void
    {
        $this->shortName = $shortName;
    }

    public function getFaxNumber(): string
    {
        return $this->faxNumber;
    }

    public function setFaxNumber(string $faxNumber): void
    {
        $this->faxNumber = $faxNumber;
    }

    public function toSoapModel(): object
    {
        $soapModel = parent::toSoapModel();

        $soapModel->idProfil = $this->profileId;
        $soapModel->nazwaSkrocona = $this->shortName;
        $soapModel->fax = $this->faxNumber;

        return $soapModel;
    }
}
