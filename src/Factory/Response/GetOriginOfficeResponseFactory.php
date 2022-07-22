<?php

declare(strict_types=1);

namespace BitBag\PPClient\Factory\Response;

use BitBag\PPClient\Model\OriginOffice;
use BitBag\PPClient\Model\Response\GetOriginOfficeResponse;

final class GetOriginOfficeResponseFactory implements GetOriginOfficeResponseFactoryInterface
{
    public function create(object $soapResponse): GetOriginOfficeResponse
    {
        $originOffices = [];

        foreach ($soapResponse->urzedyNadania as $item) {
            $originOffice = new OriginOffice();
            $originOffice->setId($item->urzadNadania);
            $originOffice->setDescription($item->opis);
            $originOffice->setName($item->nazwaWydruk);

            $originOffices[] = $originOffice;
        }

        $response = new GetOriginOfficeResponse();
        $response->setOriginOffices($originOffices);

        return $response;
    }
}
