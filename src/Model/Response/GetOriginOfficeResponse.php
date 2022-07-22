<?php

declare(strict_types=1);

namespace BitBag\PPClient\Model\Response;

use BitBag\PPClient\Model\OriginOffice;

final class GetOriginOfficeResponse
{
    /** @var OriginOffice[] */
    private array $originOffices;

    public function getOriginOffices(): array
    {
        return $this->originOffices;
    }

    public function setOriginOffices(array $originOffices): void
    {
        $this->originOffices = $originOffices;
    }
}
