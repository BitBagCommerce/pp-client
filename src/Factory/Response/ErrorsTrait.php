<?php

declare(strict_types=1);

namespace BitBag\PPClient\Factory\Response;

use BitBag\PPClient\Model\Error;
use BitBag\PPClient\Model\Response\ErrorAwareResponseInterface;

trait ErrorsTrait
{
    private function setErrors(array $soapErrors, ErrorAwareResponseInterface $response): void
    {
        if ([] === $soapErrors) {
            return;
        }

        $errors = [];

        foreach ($soapErrors as $soapError) {
            $errors[] = $this->createError($soapError);
        }

        $response->setErrors($errors);
    }

    private function createError(object $soapError): Error
    {
        $error = new Error();
        $error->setErrorNumber($soapError->errorNumber);
        $error->setErrorDesc($soapError->errorDesc);
        $error->setGuid($soapError->guid ?? null);

        return $error;
    }
}
