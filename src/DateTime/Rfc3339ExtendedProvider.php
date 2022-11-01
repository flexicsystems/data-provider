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

final class Rfc3339ExtendedProvider extends AbstractDateProvider
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
            return 'rfc3339-extended-now' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function veryNearFuture(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'rfc3339-extended-very-near-future' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function nearFuture(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'rfc3339-extended-near-future' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function future(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'rfc3339-extended-future' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function farFuture(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'rfc3339-extended-far-future' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function veryFarFuture(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'rfc3339-extended-very-far-future' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function veryNearHistory(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'rfc3339-extended-very-near-history' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function nearHistory(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'rfc3339-extended-near-history' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function history(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'rfc3339-extended-history' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function farHistory(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'rfc3339-extended-far-history' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function veryFarHistory(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'rfc3339-extended-very-far-history' === $key;
        });
    }

    public static function values(): array
    {
        return \array_map(static function (\DateTimeImmutable $value): string {
            return $value->format(\DateTime::RFC3339_EXTENDED);
        }, parent::generatedValues('rfc3339-extended'));
    }
}
