<?php

declare(strict_types=1);

namespace BitBag\PPClient\Model;

final class GeographicCoordinate implements SoapModelInterface
{
    private float $dec;

    private int $degree;

    private int $minute;

    private float $second;

    public function getDec(): float
    {
        return $this->dec;
    }

    public function setDec(float $dec): void
    {
        $this->dec = $dec;
    }

    public function getDegree(): int
    {
        return $this->degree;
    }

    public function setDegree(int $degree): void
    {
        $this->degree = $degree;
    }

    public function getMinute(): int
    {
        return $this->minute;
    }

    public function setMinute(int $minute): void
    {
        $this->minute = $minute;
    }

    public function getSecond(): float
    {
        return $this->second;
    }

    public function setSecond(float $second): void
    {
        $this->second = $second;
    }

    public function toSoapModel(): object
    {
        $soapModel = new \stdClass();

        $soapModel->dec = $this->dec;
        $soapModel->stopien = $this->degree;
        $soapModel->minuta = $this->minute;
        $soapModel->sekunda = $this->second;

        return $soapModel;
    }
}
