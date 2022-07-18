<?php

declare(strict_types=1);

namespace BitBag\PPClient\Model\Response;

use BitBag\PPClient\Model\Error;

final class SendEnvelopeResponse implements ErrorAwareResponseInterface
{
    public const SENT = 'WYSLANY';

    public const DELIVERED = 'DOSTARCZONY';

    public const RECEIVED = 'PRZYJETY';

    public const VALIDATED = 'WALIDOWANY';

    public const FAILED = 'BLEDNY';

    private ?int $envelopeId = null;

    private ?string $envelopeStatus = null;

    /** @var Error[] */
    private array $errors = [];

    private ?string $envelopeFilename = null;

    public function getEnvelopeId(): ?int
    {
        return $this->envelopeId;
    }

    public function setEnvelopeId(?int $envelopeId): void
    {
        $this->envelopeId = $envelopeId;
    }

    public function getEnvelopeStatus(): ?string
    {
        return $this->envelopeStatus;
    }

    public function setEnvelopeStatus(?string $envelopeStatus): void
    {
        $this->envelopeStatus = $envelopeStatus;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function setErrors(array $errors): void
    {
        $this->errors = $errors;
    }

    public function getEnvelopeFilename(): ?string
    {
        return $this->envelopeFilename;
    }

    public function setEnvelopeFilename(?string $envelopeFilename): void
    {
        $this->envelopeFilename = $envelopeFilename;
    }
}
