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

final class TimestampProvider extends AbstractDateProvider
{
    /**
     * @return \Generator<string, array{0: int}>
     */
    public static function arbitrary(): \Generator
    {
        yield from self::provideDataForValues(self::values());
    }

    /**
     * @return \Generator<string, array{0: int}>
     */
    public static function now(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'timestamp-now' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: int}>
     */
    public static function veryNearFuture(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'timestamp-very-near-future' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: int}>
     */
    public static function nearFuture(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'timestamp-near-future' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: int}>
     */
    public static function future(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'timestamp-future' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: int}>
     */
    public static function farFuture(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'timestamp-far-future' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: int}>
     */
    public static function veryFarFuture(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'timestamp-very-far-future' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: int}>
     */
    public static function veryNearHistory(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'timestamp-very-near-history' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: int}>
     */
    public static function nearHistory(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'timestamp-near-history' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: int}>
     */
    public static function history(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'timestamp-history' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: int}>
     */
    public static function farHistory(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'timestamp-far-history' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: int}>
     */
    public static function veryFarHistory(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'timestamp-very-far-history' === $key;
        });
    }

    public static function values(): array
    {
        return \array_map(static function (\DateTimeImmutable $dateTime): int {
            return $dateTime->getTimestamp();
        }, parent::generatedValues('timestamp'));
    }
}
