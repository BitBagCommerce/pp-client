<?php

declare(strict_types=1);

namespace BitBag\PPClient\Model;

final class PaidByReceiver implements SoapModelInterface
{
    private string $type;

    private PaidByReceiverCard $card;

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getCard(): PaidByReceiverCard
    {
        return $this->card;
    }

    public function setCard(PaidByReceiverCard $card): void
    {
        $this->card = $card;
    }

    public function toSoapModel(): object
    {
        $soapModel = new \stdClass();

        $soapModel->typ = $this->type;
        $soapModel->karta = $this->card->toSoapModel();

        return $soapModel;
    }
}
