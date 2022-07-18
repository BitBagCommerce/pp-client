<?php

declare(strict_types=1);

namespace BitBag\PPClient\Model;

final class Packet implements SoapModelInterface
{
    public const PICKUP_PLACE_OFFICE = 'URZAD_NADANIA';

    public const PICKUP_PLACE_SENDER = 'NADAWCA';

    public const SENDING_MANNER_DESTINATION_NODE = 'WERYFIKACJA_WEZEL_DOCELOWY';

    public const SENDING_MANNER_SENDING_NODE = 'WERYFIKACJA_WEZEL_NADAWCZY';

    private ?Direction $direction = null;

    private ?Packaging $packaging = null;

    private ?string $action = 'POSORTOWANA';

    private string $guid;

    private ?string $pickupPlace = self::PICKUP_PLACE_OFFICE;

    private string $sendingManner;

    public function getDirection(): ?Direction
    {
        return $this->direction;
    }

    public function setDirection(?Direction $direction): void
    {
        $this->direction = $direction;
    }

    public function getPackaging(): ?Packaging
    {
        return $this->packaging;
    }

    public function setPackaging(?Packaging $packaging): void
    {
        $this->packaging = $packaging;
    }

    public function getAction(): ?string
    {
        return $this->action;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function getGuid(): string
    {
        return $this->guid;
    }

    public function setGuid(string $guid): void
    {
        $this->guid = $guid;
    }

    public function getPickupPlace(): ?string
    {
        return $this->pickupPlace;
    }

    public function setPickupPlace(?string $pickupPlace): void
    {
        $this->pickupPlace = $pickupPlace;
    }

    public function getSendingManner(): string
    {
        return $this->sendingManner;
    }

    public function setSendingManner(string $sendingManner): void
    {
        $this->sendingManner = $sendingManner;
    }

    public function toSoapModel(): object
    {
        $soapModel = new \stdClass();

        $soapModel->kierunek = $this->direction;
        $soapModel->opakowanie = $this->packaging;
        $soapModel->czynnoscUpustowa = $this->action;
        $soapModel->pakietGuid = $this->guid;
        $soapModel->miejsceOdbioru = $this->pickupPlace;
        $soapModel->sposobNadania = $this->sendingManner;

        return $soapModel;
    }
}
