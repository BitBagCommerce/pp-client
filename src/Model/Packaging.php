<?php

declare(strict_types=1);

namespace BitBag\PPClient\Model;

final class Packaging implements SoapModelInterface
{
    public const TYPE_KL1 = 'KL1';

    public const TYPE_KL2 = 'KL2';

    public const TYPE_KL3 = 'KL3';

    public const TYPE_S21 = 'S21';

    public const TYPE_S22 = 'S22';

    public const TYPE_S23 = 'S23';

    public const TYPE_P31 = 'P31';

    public const TYPE_P32 = 'P32';

    public const TYPE_P33 = 'P33';

    public const TYPE_SP41 = 'SP41';

    public const TYPE_SP42 = 'SP42';

    public const TYPE_WKL51 = 'WKL51';

    public const TYPE_K1 = 'K1';

    public const TYPE_K2 = 'K2';

    public const TYPE_K3 = 'K3';

    public const TYPE_P = 'P';

    public const TYPE_W = 'W';

    private string $guid;

    private string $type;

    private string $signature;

    private int $amount;

    private string $collectivePackagingNumber;

    public function getGuid(): string
    {
        return $this->guid;
    }

    public function setGuid(string $guid): void
    {
        $this->guid = $guid;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getSignature(): string
    {
        return $this->signature;
    }

    public function setSignature(string $signature): void
    {
        $this->signature = $signature;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    public function getCollectivePackagingNumber(): string
    {
        return $this->collectivePackagingNumber;
    }

    public function setCollectivePackagingNumber(string $collectivePackagingNumber): void
    {
        $this->collectivePackagingNumber = $collectivePackagingNumber;
    }

    public function toSoapModel(): object
    {
        $soapModel = new \stdClass();

        $soapModel->opakowanieGuid = $this->guid;
        $soapModel->typ = $this->type;
        $soapModel->sygnatura = $this->signature;
        $soapModel->ilosc = $this->amount;
        $soapModel->numerOpakowaniaZbiorczego = $this->collectivePackagingNumber;

        return $soapModel;
    }
}
