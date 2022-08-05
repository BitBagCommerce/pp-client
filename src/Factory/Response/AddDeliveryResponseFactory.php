<?php

declare(strict_types=1);

namespace BitBag\PPClient\Factory\Response;

use BitBag\PPClient\Model\AddDeliveryResponseItem;
use BitBag\PPClient\Model\Response\AddDeliveryResponse;

final class AddDeliveryResponseFactory implements AddDeliveryResponseFactoryInterface
{
    use ErrorsTrait;

    public function create(object $soapResponse): AddDeliveryResponse
    {
        $response = new AddDeliveryResponse();

        $returnValue = $soapResponse->retval;

        $items = \is_array($returnValue) ? $returnValue : [$returnValue];
        $items = \array_filter($items, fn (object $item) => [] !== (array) $item);

        $addShipmentResponseItems = [];

        foreach ($items as $item) {
            $itemErrors = $item->error ?? [];
            $errors = \is_array($itemErrors) ? $itemErrors : [$itemErrors];

            $addShipmentResponseItem = new AddDeliveryResponseItem();
            $addShipmentResponseItems[] = $addShipmentResponseItem;

            if ([] !== $errors) {
                $this->setErrors($errors, $addShipmentResponseItem);

                continue;
            }

            $addShipmentResponseItem->setShippingNumber($item->numerNadania ?? null);
            $addShipmentResponseItem->setReceptionTransactionNumber($item->numerTransakcjiOdbioru ?? null);
            $addShipmentResponseItem->setGuid($item->guid ?? null);
        }

        $response->setAddDeliveryResponseItems($addShipmentResponseItems);

        return $response;
    }
}
