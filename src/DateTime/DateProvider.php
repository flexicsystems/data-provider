<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider\DateTime;

use Flexic\DataProvider\AbstractProvider;

final class DateProvider extends AbstractProvider
{
    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function current(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'date-current' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function veryNearFuture(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'date-very-near-future' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function nearFuture(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'date-near-future' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function future(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'date-future' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function farFuture(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'date-far-future' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function veryNearHistory(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'date-very-near-history' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function nearHistory(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'date-near-history' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function history(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'date-history' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function farHistory(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'date-far-history' === $key;
        });
    }

    public static function values(): array
    {
        $faker = self::faker();

        return [
            'date-current' => $faker->date('now'),
            'date-very-near-future' => $faker->date('+15 minutes'),
            'date-near-future' => $faker->date('+1 week'),
            'date-future' => $faker->date('+1 year'),
            'date-far-future' => $faker->date('+10 years'),
            'date-very-near-history' => $faker->date('-15 minutes'),
            'date-near-history' => $faker->date('-1 week'),
            'date-history' => $faker->date('-1 year'),
            'date-far-history' => $faker->date('-10 years'),
        ];
    }
}
