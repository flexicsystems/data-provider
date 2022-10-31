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

final class VersionProvider extends AbstractProvider
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
    public static function version(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'version' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function preRelease(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'version-pre-release' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function build(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'version-build' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function preReleaseBuild(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'version-pre-release-build' === $key;
        });
    }

    public static function values(): array
    {
        $faker = self::faker();

        return [
            'version' => $faker->semver(false, false),
            'version-pre-release' => $faker->semver(true, false),
            'version-build' => $faker->semver(false, true),
            'version-pre-release-build' => $faker->semver(true, true),
        ];
    }
}
