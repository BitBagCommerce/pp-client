<?php

declare(strict_types=1);

namespace BitBag\PPClient\Model;

final class DocumentReturnDeadlineEnum
{
    public const NORMAL_PRIORITY_MAIL = 'LIST_ZWYKLY_PRIORYTETOWY';

    public const NORMAL_ECONOMY_MAIL = 'LIST_ZWYKLY_EKONOMICZNY';

    public const REGISTERED_PRIORITY_MAIL = 'LIST_POLECONY_PRIORYTETOWY';

    public const REGISTERED_ECONOMY_MAIL = 'LIST_POLECONY_EKONOMICZNY';

    public const EKSPRES24 = 'EKSPRES24';
}
