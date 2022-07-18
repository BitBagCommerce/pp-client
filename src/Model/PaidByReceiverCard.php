<?php

declare(strict_types=1);

namespace BitBag\PPClient\Model;

final class PaidByReceiverCard implements SoapModelInterface
{
    private int $cardId;

    private int $mailingAddressId;

    public function getCardId(): int
    {
        return $this->cardId;
    }

    public function setCardId(int $cardId): void
    {
        $this->cardId = $cardId;
    }

    public function getMailingAddressId(): int
    {
        return $this->mailingAddressId;
    }

    public function setMailingAddressId(int $mailingAddressId): void
    {
        $this->mailingAddressId = $mailingAddressId;
    }

    public function toSoapModel(): object
    {
        $soapModel = new \stdClass();

        $soapModel->idKarta = $this->cardId;
        $soapModel->idAdresKorespondencyjny = $this->mailingAddressId;

        return $soapModel;
    }
}
