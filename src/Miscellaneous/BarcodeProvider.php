<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider\Miscellaneous;

use Flexic\DataProvider\AbstractProvider;

final class BarcodeProvider extends AbstractProvider
{
    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function ean13(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'barcode-ean-13' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function ean8(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'barcode-ean-8' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function isbn10(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'barcode-isbn-10' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function isbn13(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'barcode-isbn-13' === $key;
        });
    }

    public static function values(): array
    {
        $faker = self::faker();

        return [
            'barcode-ean-13' => $faker->ean13(),
            'barcode-ean-8' => $faker->ean8(),
            'barcode-isbn-10' => $faker->isbn10(),
            'barcode-isbn-13' => $faker->isbn13(),
        ];
    }
}
