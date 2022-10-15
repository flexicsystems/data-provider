<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider;

final class HashProvider extends AbstractProvider
{
    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function md5(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'hash-md5' === $key;
        });
    }

    public static function values(): array
    {
        $faker = self::faker();

        return [
            'hash-md2' => \hash('md2', $faker->text()),
            'hash-md4' => \hash('md4', $faker->text()),
            'hash-md5' => $faker->md5(),
            'hash-sha1' => $faker->sha1(),
            'hash-sha384' => \hash('sha384', $faker->text()),
            'hash-sha256' => $faker->sha256(),
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
