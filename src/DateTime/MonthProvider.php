<?php

namespace Flexic\DataProvider\DateTime;

use Flexic\DataProvider\AbstractProvider;

class MonthProvider extends AbstractProvider
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
    public static function afterNow(): \Generator
    {
        $year = (new \DateTimeImmutable('now'))->format('Y');
        $actualMonth = (new \DateTimeImmutable('now'))->format('m');

        yield from self::provideDataForValuesWhere(self::values(), static function (string $value) use ($year, $actualMonth): bool {
            return \date('m', \strtotime(\sprintf('%s %s', $value, $year))) > $actualMonth;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function beforeNow(): \Generator
    {
        $year = (new \DateTimeImmutable('now'))->format('Y');
        $actualMonth = (new \DateTimeImmutable('now'))->format('m');

        yield from self::provideDataForValuesWhere(self::values(), static function (string $value) use ($year, $actualMonth): bool {
            return \date('m', \strtotime(\sprintf('%s %s', $value, $year))) < $actualMonth;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function now(): \Generator
    {
        $year = (new \DateTimeImmutable('now'))->format('Y');
        $actualMonth = (new \DateTimeImmutable('now'))->format('m');

        yield from self::provideDataForValuesWhere(self::values(), static function (string $value) use ($year, $actualMonth): bool {
            return \date('m', \strtotime(\sprintf('%s %s', $value, $year))) === $actualMonth;
        });
    }

    public static function values(): array
    {
        return [
            'january' => 'January',
            'february' => 'February',
            'march' => 'March',
            'april' => 'April',
            'may' => 'May',
            'june' => 'June',
            'july' => 'July',
            'august' => 'August',
            'september' => 'September',
            'october' => 'October',
            'november' => 'November',
            'december' => 'December',
        ];
    }
}