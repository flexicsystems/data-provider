<?php

namespace Flexic\DataProvider;

class BarcodeProvider extends AbstractProvider
{
    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function ean13(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return $key === 'barcode-ean-13';
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function ean8(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return $key === 'barcode-ean-8';
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function isbn10(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return $key === 'barcode-isbn-10';
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function isbn13(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return $key === 'barcode-isbn-13';
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