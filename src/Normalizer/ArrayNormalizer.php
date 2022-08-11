<?php

declare(strict_types=1);

namespace BitBag\PPClient\Normalizer;

final class ArrayNormalizer implements ArrayNormalizerInterface
{
    public function normalize(mixed $data): array
    {
        if (\is_array($data)) {
            return $data;
        }

        if (\is_object($data) && \stdClass::class === \get_class($data)) {
            return [$data];
        }

        return (array) $data;
    }
}
