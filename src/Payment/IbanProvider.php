<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider\Payment;

use Flexic\DataProvider\AbstractProvider;

final class IbanProvider extends AbstractProvider
{
    /**
     * @return \Generator<string, array{0: mixed}>
     */
    public static function arbitrary(): \Generator
    {
        yield from self::provideDataForValues(self::values());
    }

    /**
     * @return \Generator<string, array{0: mixed}>
     */
    public static function invalid(): \Generator
    {
        yield from self::provideDataForValuesWhere(self::values(), static function (string $iban): bool {
            return \mb_strpos($iban, 'US') === 0;
        });
    }

    /**
     * @return \Generator<string, array{0: mixed}>
     */
    public static function valid(): \Generator
    {
        yield from self::provideDataForValuesWhere(self::values(), static function (string $iban): bool {
            return \mb_strpos($iban, 'US') !== 0;
        });
    }

    /**
     * @return array<string, string>
     */
    private static function values(): array
    {
        $faker = \Faker\Factory::create();

        // US does not support IBAN, so an IBAN starting with US is invalid.
        // IBAN in germany has 22 characters. Anything less or more is invalid.
        return [
            'iban-invalid' => $faker->iban('US', '', $faker->numberBetween(1, 20)),
            'iban-valid' => $faker->iban('DE', '', 22),
        ];
    }
}