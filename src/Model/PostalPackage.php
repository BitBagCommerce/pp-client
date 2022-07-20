<?php

declare(strict_types=1);

namespace BitBag\PPClient\Model;

final class PostalPackage extends RecordedDelivery implements SoapModelInterface
{
    public const PACKAGE_SIZE_A_MAX_DEPTH = 60;

    public const PACKAGE_SIZE_A_MAX_WIDTH = 50;

    public const PACKAGE_SIZE_A_MAX_HEIGHT = 30;

    public const PACKAGE_SIZE_B_MAX_DIMENSIONS = 150;
    
    private ?Epo $epo = null;

    private ?string $libraryForLegalDepositId = null;

    private ?string $specialRules = null;

    private bool $posteRestante = false;

    private int $numberOfDeliveryConfirmations = 0;

    private string $category;

    private string $packageSize;

    private int $weight;

    private int $totalAmount;

    private bool $returnOrRedirect = false;

    private bool $libraryCopy = false;

    private bool $visuallyImpaired = false;

    public function getEpo(): ?Epo
    {
        return $this->epo;
    }

    public function setEpo(?Epo $epo): void
    {
        $this->epo = $epo;
    }

    public function getLibraryForLegalDepositId(): ?string
    {
        return $this->libraryForLegalDepositId;
    }

    public function setLibraryForLegalDepositId(?string $libraryForLegalDepositId): void
    {
        $this->libraryForLegalDepositId = $libraryForLegalDepositId;
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

    public function getNumberOfDeliveryConfirmations(): int
    {
        return $this->numberOfDeliveryConfirmations;
    }

    public function setNumberOfDeliveryConfirmations(int $numberOfDeliveryConfirmations): void
    {
        $this->numberOfDeliveryConfirmations = $numberOfDeliveryConfirmations;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function setCategory(string $category): void
    {
        $this->category = $category;
    }

    public function getPackageSize(): string
    {
        return $this->packageSize;
    }

    public function setPackageSize(string $packageSize): void
    {
        $this->packageSize = $packageSize;
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

    public function isReturnOrRedirect(): bool
    {
        return $this->returnOrRedirect;
    }

    public function setReturnOrRedirect(bool $returnOrRedirect): void
    {
        $this->returnOrRedirect = $returnOrRedirect;
    }

    public function isLibraryCopy(): bool
    {
        return $this->libraryCopy;
    }

    public function setLibraryCopy(bool $libraryCopy): void
    {
        $this->libraryCopy = $libraryCopy;
    }

    public function isVisuallyImpaired(): bool
    {
        return $this->visuallyImpaired;
    }

    public function setVisuallyImpaired(bool $visuallyImpaired): void
    {
        $this->visuallyImpaired = $visuallyImpaired;
    }

    public function toSoapModel(): object
    {
        $soapModel = parent::toSoapModel();

        $soapModel->epo = $this->epo;
        $soapModel->idLibraryForLegalDeposit = $this->libraryForLegalDepositId;
        $soapModel->zasadySpecjalne = $this->specialRules;
        $soapModel->posteRestante = $this->posteRestante;
        $soapModel->iloscPotwierdzenOdbioru = $this->numberOfDeliveryConfirmations;
        $soapModel->kategoria = $this->category;
        $soapModel->gabaryt = $this->packageSize;
        $soapModel->masa = $this->weight;
        $soapModel->wartosc = $this->totalAmount;
        $soapModel->zwrotDoslanie = $this->returnOrRedirect;
        $soapModel->egzemplarzBiblioteczny = $this->libraryCopy;
        $soapModel->dlaOciemnialych = $this->visuallyImpaired;

        return $soapModel;
    }
}
