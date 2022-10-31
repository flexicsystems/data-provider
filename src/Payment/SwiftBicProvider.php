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

final class SwiftBicProvider extends AbstractProvider
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
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'swift-invalid' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: mixed}>
     */
    public static function valid(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return $key === 'swift-valid';
        });
    }

    /**
     * @return array<string, string>
     */
    private static function values(): array
    {
        $faker = self::faker();

        return [
            'swift-invalid' => \substr($faker->swiftBicNumber, 0, 7),
            'swift-valid' => $faker->swiftBicNumber(),
        ];
    }
}
