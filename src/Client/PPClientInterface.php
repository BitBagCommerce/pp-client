<?php

declare(strict_types=1);

namespace BitBag\PPClient\Client;

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

interface PPClientInterface
{
    public function addDelivery(DeliveryRequest $deliveryRequest): mixed;

    public function addBusinessDelivery(BusinessDeliveryRequest $businessDeliveryRequest): AddDeliveryResponse;

    public function addPocztexDelivery(PocztexDeliveryRequest $pocztexDeliveryRequest): AddDeliveryResponse;

    public function getLabel(LabelRequest $labelRequest): GetLabelResponse;

    public function sendEnvelope(SendEnvelopeRequest $sendEnvelopeRequest): SendEnvelopeResponse;

    public function clearEnvelope(): ClearEnvelopeResponse;

    public function getOriginOffices(): GetOriginOfficeResponse;
}
