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

final class CreditCardExpirationProvider extends AbstractProvider
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
    public static function valid(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'credit-card-valid' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function expired(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'credit-card-expired' === $key;
        });
    }

    public static function values(): array
    {
        $faker = self::faker();

        return [
            'credit-card-expired' => \sprintf(
                '%s/%s',
                \str_pad((string) $faker->month, 2, '0', \STR_PAD_LEFT),
                (new \DateTimeImmutable(\sprintf('-%s years', $faker->numberBetween(1, 10))))->format('y'),
            ),
            'credit-card-valid' => \sprintf(
                '%s/%s',
                \str_pad((string) $faker->month(\sprintf('+%s months', $faker->numberBetween(1, 99))), 2, '0', \STR_PAD_LEFT),
                (new \DateTimeImmutable(\sprintf('+%s years', $faker->numberBetween(1, 10))))->format('y'),
            ),
        ];
    }
}
