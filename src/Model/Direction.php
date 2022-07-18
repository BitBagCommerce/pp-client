<?php

declare(strict_types=1);

namespace BitBag\PPClient\Model;

final class Direction implements SoapModelInterface
{
    private string $postCode;

    private int $id;

    private string $description;

    private string $pna;

    public function getPostCode(): string
    {
        return $this->postCode;
    }

    public function setPostCode(string $postCode): void
    {
        $this->postCode = $postCode;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getPna(): string
    {
        return $this->pna;
    }

    public function setPna(string $pna): void
    {
        $this->pna = $pna;
    }

    public function toSoapModel(): object
    {
        $soapModel = new \stdClass();

        $soapModel->kodPocztowy = $this->postCode;
        $soapModel->id = $this->id;
        $soapModel->opis = $this->description;
        $soapModel->pna = $this->pna;

        return $soapModel;
    }
}
