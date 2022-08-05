<?php

declare(strict_types=1);

namespace BitBag\PPClient\Model;

final class GeographicLocation implements SoapModelInterface
{
    public GeographicCoordinate $longitude;

    public GeographicCoordinate $latitude;

    public function getLongitude(): GeographicCoordinate
    {
        return $this->longitude;
    }

    public function setLongitude(GeographicCoordinate $longitude): void
    {
        $this->longitude = $longitude;
    }

    public function getLatitude(): GeographicCoordinate
    {
        return $this->latitude;
    }

    public function setLatitude(GeographicCoordinate $latitude): void
    {
        $this->latitude = $latitude;
    }

    public function toSoapModel(): object
    {
        $soapModel = new \stdClass();

        $soapModel->dlugosc = $this->longitude->toSoapModel();
        $soapModel->szerokosc = $this->latitude->toSoapModel();

        return $soapModel;
    }
}
