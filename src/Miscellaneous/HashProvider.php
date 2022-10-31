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

final class HashProvider extends AbstractProvider
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
    public static function md2(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'hash-md2' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function md4(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'hash-md4' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function md5(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'hash-md5' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function sha1(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'hash-sha1' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function sha384(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'hash-sha384' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function sha256(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'hash-sha256' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function sha512(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'hash-sha512' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function ripemd128(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'hash-ripemd128' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function ripemd160(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'hash-ripemd160' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function ripemd256(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'hash-ripemd256' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function ripemd320(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'hash-ripemd320' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function whirlpool(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'hash-whirlpool' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function tiger128_3(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'hash-tiger128-3' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function tiger160_3(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'hash-tiger160-3' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function tiger192_3(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'hash-tiger192-3' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function tiger128_4(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'hash-tiger128-4' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function tiger160_4(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'hash-tiger160-4' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function tiger192_4(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'hash-tiger192-4' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function snefru(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'hash-snefru' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function gost(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'hash-gost' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function adler32(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'hash-adler32' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function crc32(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'hash-crc32' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function crc32b(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'hash-crc32b' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function haval128_3(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'hash-haval128-3' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function haval160_3(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'hash-haval160-3' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function haval192_3(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'hash-haval192-3' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function haval224_3(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'hash-haval224-3' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function haval256_3(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'hash-haval256-3' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function haval128_4(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'hash-haval128-4' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function haval160_4(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'hash-haval160-4' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function haval192_4(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'hash-haval192-4' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function haval224_4(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'hash-haval224-4' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function haval256_4(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'hash-haval256-4' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function haval128_5(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'hash-haval128-5' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function haval160_5(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'hash-haval160-5' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function haval192_5(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'hash-haval192-5' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function haval224_5(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'hash-haval224-5' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function haval256_5(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'hash-haval256-5' === $key;
        });
    }

    public static function values(): array
    {
        $faker = self::faker();

        return [
            'hash-md2' => \hash('md2', $faker->text()),
            'hash-md4' => \hash('md4', $faker->text()),
            'hash-md5' => \hash('md5', $faker->text()),
            'hash-sha1' => \hash('sha1', $faker->text()),
            'hash-sha384' => \hash('sha384', $faker->text()),
            'hash-sha256' => \hash('sha256', $faker->text()),
            'hash-sha512' => \hash('sha512', $faker->text()),
            'hash-ripemd128' => \hash('ripemd128', $faker->text()),
            'hash-ripemd160' => \hash('ripemd160', $faker->text()),
            'hash-ripemd256' => \hash('ripemd256', $faker->text()),
            'hash-ripemd320' => \hash('ripemd320', $faker->text()),
            'hash-whirlpool' => \hash('whirlpool', $faker->text()),
            'hash-tiger128-3' => \hash('tiger128,3', $faker->text()),
            'hash-tiger160-3' => \hash('tiger160,3', $faker->text()),
            'hash-tiger192-3' => \hash('tiger192,3', $faker->text()),
            'hash-tiger128-4' => \hash('tiger128,4', $faker->text()),
            'hash-tiger160-4' => \hash('tiger160,4', $faker->text()),
            'hash-tiger192-4' => \hash('tiger192,4', $faker->text()),
            'hash-snefru' => \hash('snefru', $faker->text()),
            'hash-gost' => \hash('gost', $faker->text()),
            'hash-adler32' => \hash('adler32', $faker->text()),
            'hash-crc32' => \hash('crc32', $faker->text()),
            'hash-crc32b' => \hash('crc32b', $faker->text()),
            'hash-haval128-3' => \hash('haval128,3', $faker->text()),
            'hash-haval160-3' => \hash('haval160,3', $faker->text()),
            'hash-haval192-3' => \hash('haval192,3', $faker->text()),
            'hash-haval224-3' => \hash('haval224,3', $faker->text()),
            'hash-haval256-3' => \hash('haval256,3', $faker->text()),
            'hash-haval128-4' => \hash('haval128,4', $faker->text()),
            'hash-haval160-4' => \hash('haval160,4', $faker->text()),
            'hash-haval192-4' => \hash('haval192,4', $faker->text()),
            'hash-haval224-4' => \hash('haval224,4', $faker->text()),
            'hash-haval256-4' => \hash('haval256,4', $faker->text()),
            'hash-haval128-5' => \hash('haval128,5', $faker->text()),
            'hash-haval160-5' => \hash('haval160,5', $faker->text()),
            'hash-haval192-5' => \hash('haval192,5', $faker->text()),
            'hash-haval224-5' => \hash('haval224,5', $faker->text()),
            'hash-haval256-5' => \hash('haval256,5', $faker->text()),
        ];
    }
}
