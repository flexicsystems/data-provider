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

final class CreditCardDetailsProvider extends AbstractProvider
{
    /**
     * @return \Generator<string, array{0: array}>
     */
    public static function arbitrary(): \Generator
    {
        yield from self::provideDataForValues(self::values());
    }

    /**
     * @return array<string, array>
     */
    public static function valid(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'credit-card-details-valid' === $key;
        });
    }

    /**
     * @return array<string, array>
     */
    public static function invalid(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'credit-card-details-invalid' === $key;
        });
    }

    public static function values(): array
    {
        $faker = self::faker();

        return [
            'credit-card-details-valid' => $faker->creditCardDetails(true),
            'credit-card-details-invalid' => $faker->creditCardDetails(false),
        ];
    }
}
