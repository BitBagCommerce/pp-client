<?php

declare(strict_types=1);

namespace BitBag\PPClient\Model\Request;

use BitBag\PPClient\Model\SoapModelInterface;

final class PocztexDeliveryRequest
{
    private array $packages;

    private ?int $bufferId = null;

    public function getPackages(): array
    {
        return $this->packages;
    }

    public function setPackages(array $packages): void
    {
        $this->packages = $packages;
    }

    public function getBufferId(): ?int
    {
        return $this->bufferId;
    }

    public function setBufferId(?int $bufferId): void
    {
        $this->bufferId = $bufferId;
    }

    public function toSoapModel(): object
    {
        $soapModel = new \stdClass();

        $soapModel->przesylki = \array_map(function (SoapModelInterface $package) {
            return new \SoapVar(
                $package->toSoapModel(),
                \XSD_ANYTYPE,
                'pocztex2021KurierType',
                'http://e-nadawca.poczta-polska.pl'
            );
        }, $this->packages);
        $soapModel->idBufor = $this->bufferId;

        return $soapModel;
    }
}
