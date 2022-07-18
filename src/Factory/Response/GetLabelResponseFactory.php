<?php

declare(strict_types=1);

namespace BitBag\PPClient\Factory\Response;

use BitBag\PPClient\Model\AddressLabel;
use BitBag\PPClient\Model\Response\GetLabelResponse;
use BitBag\PPClient\Normalizer\ArrayNormalizer;

final class GetLabelResponseFactory implements GetLabelResponseFactoryInterface
{
    use ErrorsTrait;

    public function __construct(private ArrayNormalizer $arrayNormalizer)
    {
    }

    public function create(object $soapResponse): GetLabelResponse
    {
        $response = new GetLabelResponse();

        $errors = $this->arrayNormalizer->normalize($soapResponse->error ?? []);

        if ([] !== $errors) {
            $this->setErrors($errors, $response);

            return $response;
        }

        $labels = [];

        foreach ($soapResponse->content as $labelData) {
            $label = new AddressLabel();

            $label->setPdfContent($labelData->pdfContent);
            $label->setShippingNumber($labelData->nrNadania);
            $label->setGuid($labelData->guid);

            $labels[] = $label;
        }

        $response->setAddressLabels($labels);

        return $response;
    }
}
