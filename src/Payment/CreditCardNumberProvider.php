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

final class CreditCardNumberProvider extends AbstractProvider
{
    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function arbitrary(): \Generator
    {
        yield from self::provideDataForValues(self::values());
    }

    /**
     * @return array<string, string>
     */
    private static function visa(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return \str_starts_with($key, 'number-visa');
        });
    }

    /**
     * @return array<string, string>
     */
    private static function mastercard(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return \str_starts_with($key, 'number-mastercard');
        });
    }

    /**
     * @return array<string, string>
     */
    private static function americanExpress(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return \str_starts_with($key, 'number-american-express');
        });
    }

    /**
     * @return array<string, string>
     */
    private static function discover(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return \str_starts_with($key, 'number-discover');
        });
    }

    /**
     * @return array<string, string>
     */
    private static function jcb(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return \str_starts_with($key, 'number-jcb');
        });
    }

    /**
     * @return array<string, string>
     */
    private static function values(): array
    {
        $faker = self::faker();

        return [
            'number-visa' => $faker->creditCardNumber('Visa'),
            'number-mastercard' => $faker->creditCardNumber('MasterCard'),
            'number-american-express' => $faker->creditCardNumber('American Express'),
            'number-discover-card' => $faker->creditCardNumber('Discover Card'),
            'number-jcb' => $faker->creditCardNumber('JCB'),
        ];
    }
}
