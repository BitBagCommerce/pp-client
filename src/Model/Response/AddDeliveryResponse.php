<?php

declare(strict_types=1);

namespace BitBag\PPClient\Model\Response;

use BitBag\PPClient\Model\AddDeliveryResponseItem;

final class AddDeliveryResponse
{
    /** @var AddDeliveryResponseItem[] */
    private array $addDeliveryResponseItems;

    public function getAddDeliveryResponseItems(): array
    {
        return $this->addDeliveryResponseItems;
    }

    public function setAddDeliveryResponseItems(array $addDeliveryResponseItems): void
    {
        $this->addDeliveryResponseItems = $addDeliveryResponseItems;
    }
}
