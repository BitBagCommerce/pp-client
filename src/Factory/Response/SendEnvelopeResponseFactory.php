<?php

declare(strict_types=1);

namespace BitBag\PPClient\Factory\Response;

use BitBag\PPClient\Model\Response\SendEnvelopeResponse;
use BitBag\PPClient\Normalizer\ArrayNormalizer;

final class SendEnvelopeResponseFactory implements SendEnvelopeResponseFactoryInterface
{
    use ErrorsTrait;

    public function __construct(private ArrayNormalizer $arrayNormalizer)
    {
    }

    public function create(object $soapResponse): SendEnvelopeResponse
    {
        $response = new SendEnvelopeResponse();

        $errors = $this->arrayNormalizer->normalize($soapResponse->error ?? []);

        if ([] !== $errors) {
            $this->setErrors($errors, $response);

            return $response;
        }

        $response->setEnvelopeId($soapResponse->idEnvelope);
        $response->setEnvelopeStatus($soapResponse->envelopeStatus);
        $response->setEnvelopeFilename($soapResponse->envelopeFilename);

        return $response;
    }
}
