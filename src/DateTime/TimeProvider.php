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

final class TimeProvider extends AbstractProvider
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
            return 'time-now' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function beforeNow(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'time-before-now' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function afterNow(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'time-after-now' === $key;
        });
    }

    public static function values(): array
    {
        $faker = self::faker();

        return [
            'time-now' => (new \DateTimeImmutable('now'))->format('H:i:s'),
            'time-random' => $faker->time('H:i:s'),
            'time-before-now' => (new \DateTimeImmutable('now'))->setTimestamp($faker->numberBetween([
                (new \DateTimeImmutable('now'))->setTime(0, 0, 0)->getTimestamp(),
                (new \DateTimeImmutable('now'))->getTimestamp(),
            ]))->format('H:i:s'),
            'time-after-now' => (new \DateTimeImmutable('now'))->setTimestamp($faker->numberBetween([
                (new \DateTimeImmutable('now'))->getTimestamp(),
                (new \DateTimeImmutable('now'))->setTime(23, 59, 59)->getTimestamp(),
            ]))->format('H:i:s'),
        ];
    }
}
