<?php

declare(strict_types=1);

namespace BitBag\PPClient\Model;

final class DocumentReturn implements SoapModelInterface
{
    private string $documentReturnDeadline;

    private ?string $documentReturnId = null;

    public function getDocumentReturnDeadline(): string
    {
        return $this->documentReturnDeadline;
    }

    public function setDocumentReturnDeadline(string $documentReturnDeadline): void
    {
        $this->documentReturnDeadline = $documentReturnDeadline;
    }

    public function getDocumentReturnId(): ?string
    {
        return $this->documentReturnId;
    }

    public function setDocumentReturnId(?string $documentReturnId): void
    {
        $this->documentReturnId = $documentReturnId;
    }

    public function toSoapModel(): object
    {
        $soapModel = new \stdClass();

        $soapModel->rodzaj = $this->documentReturnDeadline;
        $soapModel->idDokumentyZwrotneAdresy = $this->documentReturnId;

        return $soapModel;
    }
}
