<?php

declare(strict_types=1);

namespace BitBag\PPClient\Model\Response;

use BitBag\PPClient\Model\Error;

interface ErrorAwareResponseInterface
{
    /**
     * @return Error[]
     */
    public function getErrors(): array;

    /**
     * @param Error[] $errors
     */
    public function setErrors(array $errors): void;
}
