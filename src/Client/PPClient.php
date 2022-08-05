<?php

declare(strict_types=1);

namespace BitBag\PPClient\Client;

use BitBag\PPClient\Factory\Response\AddDeliveryResponseFactoryInterface;
use BitBag\PPClient\Factory\Response\ClearEnvelopeResponseFactoryInterface;
use BitBag\PPClient\Factory\Response\GetLabelResponseFactoryInterface;
use BitBag\PPClient\Factory\Response\GetOriginOfficeResponseFactoryInterface;
use BitBag\PPClient\Factory\Response\SendEnvelopeResponseFactoryInterface;
use BitBag\PPClient\Model\Request\BusinessDeliveryRequest;
use BitBag\PPClient\Model\Request\DeliveryRequest;
use BitBag\PPClient\Model\Request\LabelRequest;
use BitBag\PPClient\Model\Request\PocztexDeliveryRequest;
use BitBag\PPClient\Model\Request\SendEnvelopeRequest;
use BitBag\PPClient\Model\Response\AddDeliveryResponse;
use BitBag\PPClient\Model\Response\ClearEnvelopeResponse;
use BitBag\PPClient\Model\Response\GetLabelResponse;
use BitBag\PPClient\Model\Response\GetOriginOfficeResponse;
use BitBag\PPClient\Model\Response\SendEnvelopeResponse;

final class PPClient implements PPClientInterface
{
    public function __construct(
        private \SoapClient $soapClient,
        private AddDeliveryResponseFactoryInterface $addDeliveryResponseFactory,
        private ClearEnvelopeResponseFactoryInterface $clearEnvelopeResponseFactory,
        private GetLabelResponseFactoryInterface $getLabelResponseFactory,
        private SendEnvelopeResponseFactoryInterface $sendEnvelopeResponseFactory,
        private GetOriginOfficeResponseFactoryInterface $getOriginOfficeResponseFactory
    ) {
    }

    public function addDelivery(DeliveryRequest $deliveryRequest): AddDeliveryResponse
    {
        $response = $this->soapClient->addShipment($deliveryRequest->toSoapModel());

        return $this->addDeliveryResponseFactory->create($response);
    }

    public function addBusinessDelivery(BusinessDeliveryRequest $businessDeliveryRequest): AddDeliveryResponse
    {
        $response = $this->soapClient->addShipment($businessDeliveryRequest->toSoapModel());

        return $this->addDeliveryResponseFactory->create($response);
    }

    public function addPocztexDelivery(PocztexDeliveryRequest $pocztexDeliveryRequest): AddDeliveryResponse
    {
        $response = $this->soapClient->addShipment($pocztexDeliveryRequest->toSoapModel());

        return $this->addDeliveryResponseFactory->create($response);
    }

    public function getLabel(LabelRequest $labelRequest): GetLabelResponse
    {
        $response = $this->soapClient->getAddresLabelByGuid($labelRequest->toSoapModel());

        return $this->getLabelResponseFactory->create($response);
    }

    public function sendEnvelope(SendEnvelopeRequest $sendEnvelopeRequest): SendEnvelopeResponse
    {
        $response = $this->soapClient->sendEnvelope($sendEnvelopeRequest->toSoapModel());

        return $this->sendEnvelopeResponseFactory->create($response);
    }

    public function clearEnvelope(): ClearEnvelopeResponse
    {
        $response = $this->soapClient->clearEnvelope();

        return $this->clearEnvelopeResponseFactory->create($response);
    }

    public function getOriginOffice(): GetOriginOfficeResponse
    {
        $response = $this->soapClient->getUrzedyNadania();

        return $this->getOriginOfficeResponseFactory->create($response);
    }

    public function getPostOffices(): object
    {
        return $this->soapClient->getUrzedyWydajaceEPrzesylki();
    }
}
