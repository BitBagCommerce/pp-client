<?php

declare(strict_types=1);

namespace BitBag\PPClient\Normalizer;

interface ArrayNormalizerInterface
{
    /**
     * @param mixed $data
     */
    public function normalize($data): array;
}
