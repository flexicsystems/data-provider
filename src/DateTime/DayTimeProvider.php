<?php

namespace Flexic\DataProvider\DateTime;

use Flexic\DataProvider\AbstractProvider;

class DayTimeProvider extends AbstractProvider
{
    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function arbitrary(): \Generator
    {
        yield from self::provideDataForValues(self::values());
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function am(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'am' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function pm(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'pm' === $key;
        });
    }

    public static function values(): array
    {
        return [
            'day-time-am' => 'am',
            'day-time-pm' => 'pm',
        ];
    }
}