<?php

declare(strict_types=1);

namespace BitBag\PPClient\Client;

use BitBag\PPClient\Model\Request\LabelRequest;
use BitBag\PPClient\Model\Request\SendEnvelopeRequest;
use BitBag\PPClient\Model\Request\ShipmentRequest;
use BitBag\PPClient\Model\Response\ClearEnvelopeResponse;
use BitBag\PPClient\Model\Response\GetLabelResponse;
use BitBag\PPClient\Model\Response\GetOriginOfficeResponse;
use BitBag\PPClient\Model\Response\SendEnvelopeResponse;

interface PPClientInterface
{
    public function addShipment(ShipmentRequest $shipmentRequest): mixed;

    public function getLabel(LabelRequest $labelRequest): GetLabelResponse;

    public function sendEnvelope(SendEnvelopeRequest $sendEnvelopeRequest): SendEnvelopeResponse;

    public function clearEnvelope(): ClearEnvelopeResponse;

    public function getOriginOffice(): GetOriginOfficeResponse;
}
