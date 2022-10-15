<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider\International;

use Flexic\DataProvider\AbstractProvider;

final class CountryProvider extends AbstractProvider
{
    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function country(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'country' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function countryCodeAlpha2(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'country-code-alpha-2' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function countryCodeAlpha3(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'country-code-alpha-3' === $key;
        });
    }

    public static function values(): array
    {
        $faker = self::faker();

        return [
            'country' => $faker->country(),
            'country-code-alpha-2' => $faker->countryCode(),
            'country-code-alpha-3' => $faker->countryISOAlpha3(),
        ];
    }
}
