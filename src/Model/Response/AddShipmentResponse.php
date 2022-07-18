<?php

declare(strict_types=1);

namespace BitBag\PPClient\Model\Response;

use BitBag\PPClient\Model\AddShipmentResponseItem;

final class AddShipmentResponse
{
    /** @var AddShipmentResponseItem[] */
    private array $addShipmentResponseItems;

    public function getAddShipmentResponseItems(): array
    {
        return $this->addShipmentResponseItems;
    }

    public function setAddShipmentResponseItems(array $addShipmentResponseItems): void
    {
        $this->addShipmentResponseItems = $addShipmentResponseItems;
    }
}
