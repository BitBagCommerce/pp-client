<?php

declare(strict_types=1);

namespace BitBag\PPClient\Normalizer;

interface ArrayNormalizerInterface
{
    public function normalize(mixed $data): array;
}
