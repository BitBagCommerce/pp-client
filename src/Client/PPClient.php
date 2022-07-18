<?php

declare(strict_types=1);

namespace BitBag\PPClient\Client;

use BitBag\PPClient\Factory\Response\AddShipmentResponseFactoryInterface;
use BitBag\PPClient\Factory\Response\ClearEnvelopeResponseFactoryInterface;
use BitBag\PPClient\Factory\Response\GetLabelResponseFactoryInterface;
use BitBag\PPClient\Factory\Response\SendEnvelopeResponseFactoryInterface;
use BitBag\PPClient\Model\Request\LabelRequest;
use BitBag\PPClient\Model\Request\SendEnvelopeRequest;
use BitBag\PPClient\Model\Request\ShipmentRequest;
use BitBag\PPClient\Model\Response\AddShipmentResponse;
use BitBag\PPClient\Model\Response\ClearEnvelopeResponse;
use BitBag\PPClient\Model\Response\GetLabelResponse;
use BitBag\PPClient\Model\Response\SendEnvelopeResponse;

final class PPClient implements PPClientInterface
{
    public function __construct(
        private \SoapClient $soapClient,
        private AddShipmentResponseFactoryInterface $addShipmentResponseFactory,
        private ClearEnvelopeResponseFactoryInterface $clearEnvelopeResponseFactory,
        private GetLabelResponseFactoryInterface $getLabelResponseFactory,
        private SendEnvelopeResponseFactoryInterface $sendEnvelopeResponseFactory
    ) {
    }

    public function addShipment(ShipmentRequest $shipmentRequest): AddShipmentResponse
    {
        $response = $this->soapClient->addShipment($shipmentRequest->toSoapModel());

        return $this->addShipmentResponseFactory->create($response);
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
}
