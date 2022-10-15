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
    public static function visa(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'number-visa' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function visaFormatted(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'number-visa-formatted' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function masterCard(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'number-mastercard' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function masterCardFormatted(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'number-mastercard-formatted' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function number(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'number' === $key;
        });
    }

    /**
     * @return array<string, string>
     */
    private static function values(): array
    {
        $faker = self::faker();

        $faker->creditCardNumber();

        return [
            'number-visa' => $faker->creditCardNumber('Visa'),
            'number-visa-formatted' => $faker->creditCardNumber('Visa', true),
            'number-mastercard' => $faker->creditCardNumber('MasterCard'),
            'number-mastercard-formatted' => $faker->creditCardNumber('MasterCard', true),
            'number' => $faker->creditCardNumber(),
        ];
    }
}
