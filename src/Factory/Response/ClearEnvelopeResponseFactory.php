<?php

declare(strict_types=1);

namespace BitBag\PPClient\Factory\Response;

use BitBag\PPClient\Model\Response\ClearEnvelopeResponse;
use BitBag\PPClient\Normalizer\ArrayNormalizer;

final class ClearEnvelopeResponseFactory implements ClearEnvelopeResponseFactoryInterface
{
    use ErrorsTrait;

    private ArrayNormalizer $arrayNormalizer;

    public function __construct(ArrayNormalizer $arrayNormalizer)
    {
        $this->arrayNormalizer = $arrayNormalizer;
    }

    public function create(object $soapResponse): ClearEnvelopeResponse
    {
        $response = new ClearEnvelopeResponse();
        $response->setReturnValue($soapResponse->retval);

        $errors = $this->arrayNormalizer->normalize($soapResponse->error ?? []);

        if ([] !== $errors) {
            $this->setErrors($errors, $response);
        }

        return $response;
    }
}
