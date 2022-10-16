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

final class Iso8601Provider extends AbstractProvider
{
    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function current(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'iso8601-current' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function veryNearFuture(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'iso8601-very-near-future' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function nearFuture(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'iso8601-near-future' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function future(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'iso8601-future' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function farFuture(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'iso8601-far-future' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function veryNearHistory(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'iso8601-very-near-history' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function nearHistory(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'iso8601-near-history' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function history(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'iso8601-history' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
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
            'iso8601-current' => $faker->iso8601('now'),
            'iso8601-very-near-future' => $faker->iso8601('+15 minutes'),
            'iso8601-near-future' => $faker->iso8601('+1 week'),
            'iso8601-future' => $faker->iso8601('+1 year'),
            'iso8601-far-future' => $faker->iso8601('+10 years'),
            'iso8601-very-near-history' => $faker->iso8601('-15 minutes'),
            'iso8601-near-history' => $faker->iso8601('-1 week'),
            'iso8601-history' => $faker->iso8601('-1 year'),
            'iso8601-far-history' => $faker->iso8601('-10 years'),
        ];
    }
}
