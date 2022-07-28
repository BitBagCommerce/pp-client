<?php

declare(strict_types=1);

namespace BitBag\PPClient\Model;

final class GeographicLocation implements SoapModelInterface
{
    public GeographicCoordinate $length;

    public GeographicCoordinate $width;

    public function getLength(): GeographicCoordinate
    {
        return $this->length;
    }

    public function setLength(GeographicCoordinate $length): void
    {
        $this->length = $length;
    }

    public function getWidth(): GeographicCoordinate
    {
        return $this->width;
    }

    public function setWidth(GeographicCoordinate $width): void
    {
        $this->width = $width;
    }

    public function toSoapModel(): object
    {
        $soapModel = new \stdClass();

        $soapModel->dlugosc = $this->length->toSoapModel();
        $soapModel->szerokosc = $this->width->toSoapModel();

        return $soapModel;
    }
}
