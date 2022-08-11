<?php

declare(strict_types=1);

namespace BitBag\PPClient\Model\Request;

use BitBag\PPClient\Model\Packet;
use BitBag\PPClient\Model\Profile;
use BitBag\PPClient\Model\SoapModelInterface;

final class SendEnvelopeRequest implements SoapModelInterface
{
    private ?int $parcelOriginOffice = null;

    private Packet $packet;

    private ?int $bufferId = null;

    private ?Profile $profile = null;

    public function getParcelOriginOffice(): ?int
    {
        return $this->parcelOriginOffice;
    }

    public function setParcelOriginOffice(?int $parcelOriginOffice): void
    {
        $this->parcelOriginOffice = $parcelOriginOffice;
    }

    public function getPacket(): Packet
    {
        return $this->packet;
    }

    public function setPacket(Packet $packet): void
    {
        $this->packet = $packet;
    }

    public function getBufferId(): ?int
    {
        return $this->bufferId;
    }

    public function setBufferId(?int $bufferId): void
    {
        $this->bufferId = $bufferId;
    }

    public function getProfile(): ?Profile
    {
        return $this->profile;
    }

    public function setProfile(?Profile $profile): void
    {
        $this->profile = $profile;
    }

    public function toSoapModel(): object
    {
        $soapModel = new \stdClass();

        $soapModel->urzadNadania = $this->parcelOriginOffice;
        $soapModel->pakiet = [];
        $soapModel->idBufor = $this->bufferId;

        if (null !== $this->profile) {
            $soapModel->profil = $this->profile->toSoapModel();
        }

        return $soapModel;
    }
}
