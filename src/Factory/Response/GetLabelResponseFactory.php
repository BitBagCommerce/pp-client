<?php

declare(strict_types=1);

namespace BitBag\PPClient\Factory\Response;

use BitBag\PPClient\Model\AddressLabel;
use BitBag\PPClient\Model\Response\GetLabelResponse;
use BitBag\PPClient\Normalizer\ArrayNormalizer;

final class GetLabelResponseFactory implements GetLabelResponseFactoryInterface
{
    use ErrorsTrait;

    private ArrayNormalizer $arrayNormalizer;

    public function __construct(ArrayNormalizer $arrayNormalizer)
    {
        $this->arrayNormalizer = $arrayNormalizer;
    }

    public function create(object $soapResponse): GetLabelResponse
    {
        $response = new GetLabelResponse();

        $errors = $this->arrayNormalizer->normalize($soapResponse->error ?? []);

        if ([] !== $errors) {
            $this->setErrors($errors, $response);

            return $response;
        }

        $label = new AddressLabel();
        $label->setPdfContent($soapResponse->content->pdfContent);
        $label->setShippingNumber($soapResponse->content->nrNadania);
        $label->setGuid($soapResponse->content->guid);

        $response->setAddressLabels([$label]);

        return $response;
    }
}
