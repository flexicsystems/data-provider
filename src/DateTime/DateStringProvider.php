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

final class DateStringProvider extends AbstractDateProvider
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
    public static function now(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'date-string-now' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function veryNearFuture(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'date-string-very-near-future' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function nearFuture(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'date-string-near-future' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function future(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'date-string-future' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function farFuture(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'date-string-far-future' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function veryFarFuture(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'date-string-very-far-future' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function veryNearHistory(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'date-string-very-near-history' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function nearHistory(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'date-string-near-history' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function history(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'date-string-history' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function farHistory(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'date-string-far-history' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function veryFarHistory(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'date-string-very-far-history' === $key;
        });
    }

    public static function values(): array
    {
        return \array_map(static function (\DateTimeImmutable $value): string {
            return $value->format('F j, Y');
        }, parent::generatedValues('date-string'));
    }
}
