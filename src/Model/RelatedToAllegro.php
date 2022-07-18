<?php

declare(strict_types=1);

namespace BitBag\PPClient\Model;

final class RelatedToAllegro implements SoapModelInterface
{
    private string $id;

    private string $sellerId;

    private string $channel;

    private string $deliveryMethod;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getSellerId(): string
    {
        return $this->sellerId;
    }

    public function setSellerId(string $sellerId): void
    {
        $this->sellerId = $sellerId;
    }

    public function getChannel(): string
    {
        return $this->channel;
    }

    public function setChannel(string $channel): void
    {
        $this->channel = $channel;
    }

    public function getDeliveryMethod(): string
    {
        return $this->deliveryMethod;
    }

    public function setDeliveryMethod(string $deliveryMethod): void
    {
        $this->deliveryMethod = $deliveryMethod;
    }

    public function toSoapModel(): object
    {
        $soapModel = new \stdClass();

        $soapModel->id = $this->id;
        $soapModel->sellerId = $this->sellerId;
        $soapModel->channel = $this->channel;
        $soapModel->deliveryMethod = $this->deliveryMethod;

        return $soapModel;
    }
}
