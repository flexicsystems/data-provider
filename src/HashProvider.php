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

    public static function values(string $input): array
    {
        return [
            'hash-md2' => \hash('md2', $input),
            'hash-md4' => \hash('md4', $input),
            'hash-md5' => \hash('md5', $input),
            'hash-sha1' => \hash('sha1', $input),
            'hash-sha384' => \hash('sha384', $input),
            'hash-sha256' => \hash('sha256', $input),
            'hash-sha512' => \hash('sha512', $input),
            'hash-ripemd128' => \hash('ripemd128', $input),
            'hash-ripemd160' => \hash('ripemd160', $input),
            'hash-ripemd256' => \hash('ripemd256', $input),
            'hash-ripemd320' => \hash('ripemd320', $input),
            'hash-whirlpool' => \hash('whirlpool', $input),
            'hash-tiger128-3' => \hash('tiger128,3', $input),
            'hash-tiger160-3' => \hash('tiger160,3', $input),
            'hash-tiger192-3' => \hash('tiger192,3', $input),
            'hash-tiger128-4' => \hash('tiger128,4', $input),
            'hash-tiger160-4' => \hash('tiger160,4', $input),
            'hash-tiger192-4' => \hash('tiger192,4', $input),
            'hash-snefru' => \hash('snefru', $input),
            'hash-gost' => \hash('gost', $input),
            'hash-adler32' => \hash('adler32', $input),
            'hash-crc32' => \hash('crc32', $input),
            'hash-crc32b' => \hash('crc32b', $input),
            'hash-haval128-3' => \hash('haval128,3', $input),
            'hash-haval160-3' => \hash('haval160,3', $input),
            'hash-haval192-3' => \hash('haval192,3', $input),
            'hash-haval224-3' => \hash('haval224,3', $input),
            'hash-haval256-3' => \hash('haval256,3', $input),
            'hash-haval128-4' => \hash('haval128,4', $input),
            'hash-haval160-4' => \hash('haval160,4', $input),
            'hash-haval192-4' => \hash('haval192,4', $input),
            'hash-haval224-4' => \hash('haval224,4', $input),
            'hash-haval256-4' => \hash('haval256,4', $input),
            'hash-haval128-5' => \hash('haval128,5', $input),
            'hash-haval160-5' => \hash('haval160,5', $input),
            'hash-haval192-5' => \hash('haval192,5', $input),
            'hash-haval224-5' => \hash('haval224,5', $input),
            'hash-haval256-5' => \hash('haval256,5', $input),
        ];
    }
}
