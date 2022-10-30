<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider\File;

use Flexic\DataProvider\AbstractProvider;

final class FilePathProvider extends AbstractProvider
{
    public static function arbitrary(): \Generator
    {
        yield from self::provideDataForValues(self::values());
    }

    public static function linux(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'file-path-unix' === $key;
        });
    }

    public static function unix(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'file-path-unix' === $key;
        });
    }

    public static function mac(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'file-path-mac' === $key;
        });
    }

    public static function windows(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'file-path-windows' === $key;
        });
    }

    public static function values(): array
    {
        $faker = self::faker();

        $prefix = $faker->randomElement([
            '../',
            './',
            '/',
            '',
        ]);

        return [
            'file-path-unix' => \sprintf('%s%s/', $prefix, \implode('/', $faker->words(4, false))),
            'file-path-windows' => \sprintf('%s%s\\', \str_replace('/', '\\', $prefix), \implode('\\', $faker->words(4, false))),
        ];
    }
}
