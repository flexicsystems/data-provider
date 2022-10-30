<?php

namespace Flexic\DataProvider\DateTime;

use Flexic\DataProvider\AbstractProvider;

class MonthNumberProvider extends AbstractProvider
{
    public static function arbitrary(): \Generator
    {
        yield from self::provideDataForValues(self::values());
    }

    /**
     * @return \Generator<string, array{0: int}>
     */
    public static function afterNow(): \Generator
    {
        $actualMonth = (int) (new \DateTimeImmutable('now'))->format('n');

        yield from self::provideDataForValuesWhere(self::values(), static function (int $value) use ($actualMonth): bool {
            return $value > $actualMonth;
        });
    }

    /**
     * @return \Generator<string, array{0: int}>
     */
    public static function beforeNow(): \Generator
    {
        $actualMonth = (int) (new \DateTimeImmutable('now'))->format('n');

        yield from self::provideDataForValuesWhere(self::values(), static function (int $value) use ($actualMonth): bool {
            return $value < $actualMonth;
        });
    }

    /**
     * @return \Generator<string, array{0: int}>
     */
    public static function now(): \Generator
    {
        $actualMonth = (int) (new \DateTimeImmutable('now'))->format('n');

        yield from self::provideDataForValuesWhere(self::values(), static function (int $value) use ($actualMonth): bool {
            return $value === $actualMonth;
        });
    }

    public static function values(): array
    {
        return [
            'january' => 1,
            'february' => 2,
            'march' => 3,
            'april' => 4,
            'may' => 5,
            'june' => 6,
            'july' => 7,
            'august' => 8,
            'september' => 9,
            'october' => 10,
            'november' => 11,
            'december' => 12,
        ];
    }
}