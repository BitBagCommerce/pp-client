<?php

declare(strict_types=1);

namespace BitBag\PPClient\Model;

final class BusinessDelivery extends RecordedDelivery implements SoapModelInterface
{
    public const PACKAGE_SIZE_XS = 'XS';

    public const PACKAGE_SIZE_S = 'S';

    public const PACKAGE_SIZE_M = 'M';

    public const PACKAGE_SIZE_L = 'L';

    public const PACKAGE_SIZE_XL = 'XL';

    public const PACKAGE_SIZE_XXL = 'XXL';

    private ?COD $COD;

    private PickupPoint $pickupPoint;

    private ?Insurance $insurance = null;

    private Epo $epo;

    private ?Address $returnAddress = null;

    private ?bool $checkedByReceiver = null;

    private ?BusinessDeliveryConfirmation $businessDeliveryConfirmation = null;

    private ?bool $delivery = null;

    private ?DocumentReturn $documentReturn = null;

    private ?string $specialRules = null;

    private int $weight;

    private string $packageSize;

    private int $totalAmount;

    private bool $fragile;

    private string $receivalTransactionCode;

    private string $senderNotificationType;

    private string $senderContactInformation;

    private string $receiverNotificationType;

    private string $receiverContactInformation;

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

    public function getInsurance(): ?Insurance
    {
        return $this->insurance;
    }

    public function setInsurance(?Insurance $insurance): void
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

    public function getReturnAddress(): ?Address
    {
        return $this->returnAddress;
    }

    public function setReturnAddress(?Address $returnAddress): void
    {
        $this->returnAddress = $returnAddress;
    }

    public function isCheckedByReceiver(): ?bool
    {
        return $this->checkedByReceiver;
    }

    public function setCheckedByReceiver(?bool $checkedByReceiver): void
    {
        $this->checkedByReceiver = $checkedByReceiver;
    }

    public function getBusinessDeliveryConfirmation(): ?BusinessDeliveryConfirmation
    {
        return $this->businessDeliveryConfirmation;
    }

    public function setBusinessDeliveryConfirmation(?BusinessDeliveryConfirmation $businessDeliveryConfirmation): void
    {
        $this->businessDeliveryConfirmation = $businessDeliveryConfirmation;
    }

    public function isDelivery(): ?bool
    {
        return $this->delivery;
    }

    public function setDelivery(?bool $delivery): void
    {
        $this->delivery = $delivery;
    }

    public function getDocumentReturn(): ?DocumentReturn
    {
        return $this->documentReturn;
    }

    public function setDocumentReturn(?DocumentReturn $documentReturn): void
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

    public function getSenderNotificationType(): string
    {
        return $this->senderNotificationType;
    }

    public function setSenderNotificationType(string $senderNotificationType): void
    {
        $this->senderNotificationType = $senderNotificationType;
    }

    public function getSenderContactInformation(): string
    {
        return $this->senderContactInformation;
    }

    public function setSenderContactInformation(string $senderContactInformation): void
    {
        $this->senderContactInformation = $senderContactInformation;
    }

    public function getReceiverNotificationType(): string
    {
        return $this->receiverNotificationType;
    }

    public function setReceiverNotificationType(string $receiverNotificationType): void
    {
        $this->receiverNotificationType = $receiverNotificationType;
    }

    public function getReceiverContactInformation(): string
    {
        return $this->receiverContactInformation;
    }

    public function setReceiverContactInformation(string $receiverContactInformation): void
    {
        $this->receiverContactInformation = $receiverContactInformation;
    }

    public function toSoapModel(): object
    {
        $soapModel = parent::toSoapModel();

        if (null !== $this->COD) {
            $soapModel->pobranie = $this->COD->toSoapModel();
        }

        $soapModel->urzadWydaniaEPrzesylki = $this->pickupPoint->toSoapModel();

        if (null !== $this->insurance) {
            $soapModel->ubezpieczenie = $this->insurance->toSoapModel();
        }

        $soapModel->epo = $this->epo;

        if (null !== $this->returnAddress) {
            $soapModel->adresDlaZwrotu = $this->returnAddress->toSoapModel();
        }

        $soapModel->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = $this->checkedByReceiver;

        if (null !== $this->businessDeliveryConfirmation) {
            $soapModel->potwierdzenieOdbioru = $this->businessDeliveryConfirmation->toSoapModel();
        }
        $soapModel->doreczenie = $this->delivery;

        if (null !== $this->documentReturn) {
            $soapModel->zwrotDokumentow = $this->documentReturn->toSoapModel();
        }

        $soapModel->zasadySpecjalne = $this->specialRules;
        $soapModel->masa = $this->weight;
        $soapModel->gabaryt = $this->packageSize;
        $soapModel->wartosc = $this->totalAmount;
        $soapModel->ostroznie = $this->fragile;
        $soapModel->numerTransakcjiOdbioru = $this->receivalTransactionCode;

        return $soapModel;
    }
}
