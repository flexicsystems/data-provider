<?php

namespace Flexic\DataProvider\Payment;

use Flexic\DataProvider\AbstractProvider;

class CreditCardNumberProvider extends AbstractProvider
{
    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function visa(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return $key === 'number-visa';
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function visaFormatted(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return $key === 'number-visa-formatted';
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function masterCard(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return $key === 'number-mastercard';
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function masterCardFormatted(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return $key === 'number-mastercard-formatted';
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function number(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return $key === 'number';
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