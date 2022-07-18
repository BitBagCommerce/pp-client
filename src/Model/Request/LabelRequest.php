<?php

declare(strict_types=1);

namespace BitBag\PPClient\Model\Request;

use BitBag\PPClient\Model\SoapModelInterface;

final class LabelRequest implements SoapModelInterface
{
    private string $guid;

    private ?int $bufferId = null;

    public function getGuid(): string
    {
        return $this->guid;
    }

    public function setGuid(string $guid): void
    {
        $this->guid = $guid;
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

        $soapModel->guid = $this->guid;
        $soapModel->idBufor = $this->bufferId;

        return $soapModel;
    }
}
