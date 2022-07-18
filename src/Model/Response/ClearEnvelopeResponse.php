<?php

declare(strict_types=1);

namespace BitBag\PPClient\Model\Response;

use BitBag\PPClient\Model\Error;

final class ClearEnvelopeResponse implements ErrorAwareResponseInterface
{
    private bool $returnValue;

    /** @var Error[] */
    private array $errors = [];

    public function getReturnValue(): bool
    {
        return $this->returnValue;
    }

    public function setReturnValue(bool $returnValue): void
    {
        $this->returnValue = $returnValue;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function setErrors(array $errors): void
    {
        $this->errors = $errors;
    }
}
