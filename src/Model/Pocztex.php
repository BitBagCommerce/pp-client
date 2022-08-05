<?php

declare(strict_types=1);

namespace BitBag\PPClient\Model;

abstract class Pocztex extends RecordedDelivery implements SoapModelInterface
{
    private ?COD $cod = null;

    private ?ConfirmationDelivery $confirmationDelivery = null;

    private ?ConfirmationReceipt $confirmationReceipt = null;

    private ?Insurance $insurance = null;

    private int $weight;

    private int $totalAmount;

    private bool $fragile = false;

    private bool $overPackageSize = false;

    private string $pocztexPackageFormat;

    private ?string $numberPackageClient = null;

    private ?DocumentReturn $documentReturn = null;

    private ?int $idDocumentReturnAddress = null;

    private Epo $epo;

    private ?Address $returnAddress = null;

    private bool $receiveInSaturday = false;

    private ?string $specialRules = null;

    private ?PackageContent $packageContents = null;

    private bool $toBeCheckedByReceiver = false;

    private string $paidBy;

    private bool $personalDelivery = false;

    public function getCod(): ?COD
    {
        return $this->cod;
    }

    public function setCod(?COD $cod): void
    {
        $this->cod = $cod;
    }

    public function getConfirmationDelivery(): ?ConfirmationDelivery
    {
        return $this->confirmationDelivery;
    }

    public function setConfirmationDelivery(?ConfirmationDelivery $confirmationDelivery): void
    {
        $this->confirmationDelivery = $confirmationDelivery;
    }

    public function getConfirmationReceipt(): ?ConfirmationReceipt
    {
        return $this->confirmationReceipt;
    }

    public function setConfirmationReceipt(?ConfirmationReceipt $confirmationReceipt): void
    {
        $this->confirmationReceipt = $confirmationReceipt;
    }

    public function getInsurance(): ?Insurance
    {
        return $this->insurance;
    }

    public function setInsurance(?Insurance $insurance): void
    {
        $this->insurance = $insurance;
    }

    public function getWeight(): int
    {
        return $this->weight;
    }

    public function setWeight(int $weight): void
    {
        $this->weight = $weight;
    }

    public function getTotalAmount(): int
    {
        return $this->totalAmount;
    }

    public function setTotalAmount(int $totalAmount): void
    {
        $this->totalAmount = $totalAmount;
    }

    public function isFragile(): bool
    {
        return $this->fragile;
    }

    public function setFragile(bool $fragile): void
    {
        $this->fragile = $fragile;
    }

    public function isOverPackageSize(): bool
    {
        return $this->overPackageSize;
    }

    public function setOverPackageSize(bool $overPackageSize): void
    {
        $this->overPackageSize = $overPackageSize;
    }

    public function getPocztexPackageFormat(): string
    {
        return $this->pocztexPackageFormat;
    }

    public function setPocztexPackageFormat(string $pocztexPackageFormat): void
    {
        $this->pocztexPackageFormat = $pocztexPackageFormat;
    }

    public function getNumberPackageClient(): ?string
    {
        return $this->numberPackageClient;
    }

    public function setNumberPackageClient(?string $numberPackageClient): void
    {
        $this->numberPackageClient = $numberPackageClient;
    }

    public function getDocumentReturn(): ?DocumentReturn
    {
        return $this->documentReturn;
    }

    public function setDocumentReturn(?DocumentReturn $documentReturn): void
    {
        $this->documentReturn = $documentReturn;
    }

    public function getIdDocumentReturnAddress(): ?int
    {
        return $this->idDocumentReturnAddress;
    }

    public function setIdDocumentReturnAddress(?int $idDocumentReturnAddress): void
    {
        $this->idDocumentReturnAddress = $idDocumentReturnAddress;
    }

    public function getEpo(): Epo
    {
        return $this->epo;
    }

    public function setEpo(Epo $epo): void
    {
        $this->epo = $epo;
    }

    public function getReturnAddress(): ?Address
    {
        return $this->returnAddress;
    }

    public function setReturnAddress(?Address $returnAddress): void
    {
        $this->returnAddress = $returnAddress;
    }

    public function isReceiveInSaturday(): bool
    {
        return $this->receiveInSaturday;
    }

    public function setReceiveInSaturday(bool $receiveInSaturday): void
    {
        $this->receiveInSaturday = $receiveInSaturday;
    }

    public function getSpecialRules(): ?string
    {
        return $this->specialRules;
    }

    public function setSpecialRules(?string $specialRules): void
    {
        $this->specialRules = $specialRules;
    }

    public function getPackageContents(): ?PackageContent
    {
        return $this->packageContents;
    }

    public function setPackageContents(?PackageContent $packageContents): void
    {
        $this->packageContents = $packageContents;
    }

    public function isToBeCheckedByReceiver(): bool
    {
        return $this->toBeCheckedByReceiver;
    }

    public function setToBeCheckedByReceiver(bool $toBeCheckedByReceiver): void
    {
        $this->toBeCheckedByReceiver = $toBeCheckedByReceiver;
    }

    public function getPaidBy(): string
    {
        return $this->paidBy;
    }

    public function setPaidBy(string $paidBy): void
    {
        $this->paidBy = $paidBy;
    }

    public function isPersonalDelivery(): bool
    {
        return $this->personalDelivery;
    }

    public function setPersonalDelivery(bool $personalDelivery): void
    {
        $this->personalDelivery = $personalDelivery;
    }

    public function toSoapModel(): object
    {
        $soapModel = parent::toSoapModel();

        $soapModel->pobranie = $this->cod?->toSoapModel();
        $soapModel->potwierdzenieDoreczenia = $this->confirmationDelivery?->toSoapModel();
        $soapModel->potwierdzenieOdbioru = $this->confirmationReceipt?->toSoapModel();
        $soapModel->ubezpieczenie = $this->insurance?->toSoapModel();
        $soapModel->masa = $this->weight;
        $soapModel->wartosc = $this->totalAmount;
        $soapModel->ostroznie = $this->fragile;
        $soapModel->ponadgabaryt = $this->overPackageSize;
        $soapModel->format = $this->pocztexPackageFormat;
        $soapModel->numerPrzesylkiKlienta = $this->numberPackageClient;
        $soapModel->zwrotDokumentow = $this->documentReturn?->toSoapModel();
        $soapModel->idDokumentyZwrotneAdresy = $this->idDocumentReturnAddress;
        $soapModel->epo = $this->epo;
        $soapModel->adresDlaZwrotu = $this->returnAddress?->toSoapModel();
        $soapModel->odbiorWSobote = $this->receiveInSaturday;
        $soapModel->zasadySpecjalne = $this->specialRules;
        $soapModel->zawartosc = $this->packageContents?->toSoapModel();
        $soapModel->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = $this->toBeCheckedByReceiver;
        $soapModel->uiszczaOplate = $this->paidBy;
        $soapModel->doreczenieDoRakWlasnych = $this->personalDelivery;

        return $soapModel;
    }
}
