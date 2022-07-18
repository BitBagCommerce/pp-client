<?php

declare(strict_types=1);

namespace BitBag\PPClient\Model\Response;

use BitBag\PPClient\Model\AddressLabel;
use BitBag\PPClient\Model\Error;

final class GetLabelResponse implements ErrorAwareResponseInterface
{
    /** @var AddressLabel[] */
    private array $addressLabels = [];

    /** @var Error[] */
    private array $errors = [];

    public function getAddressLabels(): array
    {
        return $this->addressLabels;
    }

    public function setAddressLabels(array $addressLabels): void
    {
        $this->addressLabels = $addressLabels;
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
