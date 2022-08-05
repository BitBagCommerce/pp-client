<?php declare(strict_types=1);

namespace BitBag\PPClient\Model;

final class BusinessDelivery extends RecordedDelivery implements SoapModelInterface
{
    private const PACKAGE_SIZE_XS = 'XS';
    private const PACKAGE_SIZE_S = 'S';
    private const PACKAGE_SIZE_M = 'M';
    private const PACKAGE_SIZE_L = 'L';
    private const PACKAGE_SIZE_XL = 'XL';
    private const PACKAGE_SIZE_XXL = 'XXL';

    private ?COD $COD;

    private PickupPoint $pickupPoint;

    private Insurance $insurance;

    private Epo $epo;

    private Address $returnAddress;

    private bool $checkedByReceiver;

    private ReceivalConfirmation $receivalConfirmation;

    private bool $delivery;

    private DocumentReturn $documentReturn;

    private ?string $specialRules = null;

    private bool $posteRestante;

    private int $weight;

    private string $packageSize;

    private int $totalAmount;

    private bool $fragile;

    private string $receivalTransactionCode;

    public function getCOD(): ?COD
    {
        return $this->COD;
    }

    public function setCOD(?COD $COD): void
    {
        $this->COD = $COD;
    }

    public function getPickupPoint(): PickupPoint
    {
        return $this->pickupPoint;
    }

    public function setPickupPoint(PickupPoint $pickupPoint): void
    {
        $this->pickupPoint = $pickupPoint;
    }

    public function getInsurance(): Insurance
    {
        return $this->insurance;
    }

    public function setInsurance(Insurance $insurance): void
    {
        $this->insurance = $insurance;
    }

    public function getEpo(): Epo
    {
        return $this->epo;
    }

    public function setEpo(Epo $epo): void
    {
        $this->epo = $epo;
    }

    public function getReturnAddress(): Address
    {
        return $this->returnAddress;
    }

    public function setReturnAddress(Address $returnAddress): void
    {
        $this->returnAddress = $returnAddress;
    }

    public function isCheckedByReceiver(): bool
    {
        return $this->checkedByReceiver;
    }

    public function setCheckedByReceiver(bool $checkedByReceiver): void
    {
        $this->checkedByReceiver = $checkedByReceiver;
    }

    public function getReceivalConfirmation(): ReceivalConfirmation
    {
        return $this->receivalConfirmation;
    }

    public function setReceivalConfirmation(ReceivalConfirmation $receivalConfirmation): void
    {
        $this->receivalConfirmation = $receivalConfirmation;
    }

    public function isDelivery(): bool
    {
        return $this->delivery;
    }

    public function setDelivery(bool $delivery): void
    {
        $this->delivery = $delivery;
    }

    public function getDocumentReturn(): DocumentReturn
    {
        return $this->documentReturn;
    }

    public function setDocumentReturn(DocumentReturn $documentReturn): void
    {
        $this->documentReturn = $documentReturn;
    }

    public function getSpecialRules(): ?string
    {
        return $this->specialRules;
    }

    public function setSpecialRules(?string $specialRules): void
    {
        $this->specialRules = $specialRules;
    }

    public function isPosteRestante(): bool
    {
        return $this->posteRestante;
    }

    public function setPosteRestante(bool $posteRestante): void
    {
        $this->posteRestante = $posteRestante;
    }

    public function getWeight(): int
    {
        return $this->weight;
    }

    public function setWeight(int $weight): void
    {
        $this->weight = $weight;
    }

    public function getPackageSize(): string
    {
        return $this->packageSize;
    }

    public function setPackageSize(string $packageSize): void
    {
        $this->packageSize = $packageSize;
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

    public function getReceivalTransactionCode(): string
    {
        return $this->receivalTransactionCode;
    }

    public function setReceivalTransactionCode(string $receivalTransactionCode): void
    {
        $this->receivalTransactionCode = $receivalTransactionCode;
    }

    public function toSoapModel(): object
    {
        $soapModel = parent::toSoapModel();

        $soapModel->pobranie = $this->COD;
        $soapModel->urzadWydaniaEPrzesylki = $this->pickupPoint;
        $soapModel->ubezpieczenie = $this->insurance;
        $soapModel->epo = $this->epo;
        $soapModel->adresDlaZwrotu = $this->returnAddress;
        $soapModel->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = $this->checkedByReceiver;
        $soapModel->potwierdzenieOdbioru = $this->receivalConfirmation;
        $soapModel->doreczenie = $this->delivery;
        $soapModel->zwrotDokumentow = $this->documentReturn;
        $soapModel->zasadySpecjalne = $this->specialRules;
        $soapModel->posteRestante = $this->posteRestante;
        $soapModel->masa = $this->weight;
        $soapModel->gabaryt = $this->packageSize;
        $soapModel->wartosc = $this->totalAmount;
        $soapModel->ostroznie = $this->fragile;
        $soapModel->numerTransakcjiOdbioru = $this->receivalTransactionCode;

        return $soapModel;
    }
}
