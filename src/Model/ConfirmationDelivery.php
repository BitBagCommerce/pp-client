<?php

declare(strict_types=1);

namespace BitBag\PPClient\Model;

final class ConfirmationDelivery implements SoapModelInterface
{
    public const METHOD_TYPE_SMS = 'SMS';

    public const METHOD_TYPE_EMAIL = 'EMAIL';

    private string $method = self::METHOD_TYPE_EMAIL;

    private string $contact = '';

    public function getMethod(): string
    {
        return $this->method;
    }

    public function setMethod(string $method): void
    {
        $this->method = $method;
    }

    public function getContact(): string
    {
        return $this->contact;
    }

    public function setContact(string $contact): void
    {
        $this->contact = $contact;
    }

    public function toSoapModel(): object
    {
        $soapModel = new \stdClass();

        $soapModel->metoda = $this->method;
        $soapModel->kontakt = $this->contact;

        return $soapModel;
    }
}
