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

        $addDeliveryResponseItems = [];

        foreach ($items as $item) {
            $itemErrors = $item->error ?? [];
            $errors = \is_array($itemErrors) ? $itemErrors : [$itemErrors];

            $addDeliveryResponseItem = new AddDeliveryResponseItem();
            $addDeliveryResponseItems[] = $addDeliveryResponseItem;

            if ([] !== $errors) {
                $this->setErrors($errors, $addDeliveryResponseItem);

                continue;
            }

            $addDeliveryResponseItem->setShippingNumber($item->numerNadania ?? null);
            $addDeliveryResponseItem->setReceptionTransactionNumber($item->numerTransakcjiOdbioru ?? null);
            $addDeliveryResponseItem->setGuid($item->guid ?? null);
        }

        $response->setAddDeliveryResponseItems($addDeliveryResponseItems);

        return $response;
    }
}
