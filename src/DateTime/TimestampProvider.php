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

final class TimestampProvider extends AbstractProvider
{
    /**
     * @return \Generator<string, array{0: int}>
     */
    public static function current(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'iso8601-current' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: int}>
     */
    public static function veryNearFuture(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'iso8601-very-near-future' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: int}>
     */
    public static function nearFuture(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'iso8601-near-future' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: int}>
     */
    public static function future(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'iso8601-future' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: int}>
     */
    public static function farFuture(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'iso8601-far-future' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: int}>
     */
    public static function veryNearHistory(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'iso8601-very-near-history' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: int}>
     */
    public static function nearHistory(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'iso8601-near-history' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: int}>
     */
    public static function history(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'iso8601-history' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: int}>
     */
    public static function farHistory(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'iso8601-far-history' === $key;
        });
    }

    public static function values(): array
    {
        $faker = self::faker();

        return [
            'iso8601-current' => $faker->unixTime('now'),
            'iso8601-very-near-future' => $faker->unixTime('+15 minutes'),
            'iso8601-near-future' => $faker->unixTime('+1 week'),
            'iso8601-future' => $faker->unixTime('+1 year'),
            'iso8601-far-future' => $faker->unixTime('+10 years'),
            'iso8601-very-near-history' => $faker->unixTime('-15 minutes'),
            'iso8601-near-history' => $faker->unixTime('-1 week'),
            'iso8601-history' => $faker->unixTime('-1 year'),
            'iso8601-far-history' => $faker->unixTime('-10 years'),
        ];
    }
}
