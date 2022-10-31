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

final class DayOfMonthProvider extends AbstractProvider
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
    public static function january(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'day-of-month-january' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function february(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'day-of-month-february' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function march(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'day-of-month-march' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function april(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'day-of-month-april' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function may(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'day-of-month-may' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function june(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'day-of-month-june' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function july(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'day-of-month-july' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function august(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'day-of-month-august' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function september(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'day-of-month-september' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function october(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'day-of-month-october' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function november(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'day-of-month-november' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function december(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'day-of-month-december' === $key;
        });
    }

    public static function values(): array
    {
        $faker = self::faker();

        return [
            'day-of-month-january' => \str_pad($faker->numberBetween(1, 31), 2, '0', \STR_PAD_LEFT),
            'day-of-month-february' => \str_pad($faker->numberBetween(1, 28), 2, '0', \STR_PAD_LEFT),
            'day-of-month-february-leap' => \str_pad($faker->numberBetween(1, 29), 2, '0', \STR_PAD_LEFT),
            'day-of-month-march' => \str_pad($faker->numberBetween(1, 31), 2, '0', \STR_PAD_LEFT),
            'day-of-month-april' => \str_pad($faker->numberBetween(1, 30), 2, '0', \STR_PAD_LEFT),
            'day-of-month-may' => \str_pad($faker->numberBetween(1, 31), 2, '0', \STR_PAD_LEFT),
            'day-of-month-june' => \str_pad($faker->numberBetween(1, 30), 2, '0', \STR_PAD_LEFT),
            'day-of-month-july' => \str_pad($faker->numberBetween(1, 31), 2, '0', \STR_PAD_LEFT),
            'day-of-month-august' => \str_pad($faker->numberBetween(1, 31), 2, '0', \STR_PAD_LEFT),
            'day-of-month-september' => \str_pad($faker->numberBetween(1, 30), 2, '0', \STR_PAD_LEFT),
            'day-of-month-october' => \str_pad($faker->numberBetween(1, 31), 2, '0', \STR_PAD_LEFT),
            'day-of-month-november' => \str_pad($faker->numberBetween(1, 30), 2, '0', \STR_PAD_LEFT),
            'day-of-month-december' => \str_pad($faker->numberBetween(1, 31), 2, '0', \STR_PAD_LEFT),
        ];
    }
}
