<?php

namespace Flexic\DataProvider\DateTime;

use Flexic\DataProvider\AbstractProvider;

class CenturyProvider extends AbstractProvider
{
    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function arbitrary(): \Generator
    {
        yield from self::provideDataForValues(self::values());
    }

    public static function values(): array
    {
        return [
            'century' => self::faker()->century,
        ];
    }
}