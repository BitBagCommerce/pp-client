<?php

declare(strict_types=1);

namespace BitBag\PPClient\Model\Response;

use BitBag\PPClient\Model\OriginOffice;

final class GetOriginOfficeResponse
{
    /** @var OriginOffice[] */
    private array $originOffice;
    
    public function getOriginOffice(): array
    {
        return $this->originOffice;
    }
    
    public function setOriginOffice(array $originOffice): void
    {
        $this->originOffice = $originOffice;
    }
}
