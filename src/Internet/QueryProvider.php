<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider\Internet;

use Flexic\DataProvider\AbstractProvider;

final class QueryProvider extends AbstractProvider
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
    public static function veryShort(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key) {
            return 'query-very-short' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function short(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key) {
            return 'query-short' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function normal(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key) {
            return 'query-normal' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function long(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key) {
            return 'query-long' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function veryLong(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key) {
            return 'query-very-long' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function extremeLong(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key) {
            return 'query-extreme-long' === $key;
        });
    }

    public static function values(): array
    {
        return [
            'query-very-short' => self::random(1),
            'query-short' => self::random(3),
            'query-normal' => self::random(5),
            'query-long' => self::random(10),
            'query-very-long' => self::random(25),
            'query-extreme-long' => self::random(50),
        ];
    }

    public static function random(int $numberOfParameters): string
    {
        $faker = self::faker();
        $query = [];

        for ($i = 0; $i < $numberOfParameters; ++$i) {
            $query[] = \sprintf('%s=%s', $faker->word(), $faker->word());
        }

        return \sprintf('?%s', \implode('&', $query));
    }
}
