<?php

namespace Flexic\DataProvider;

class VersionProvider extends AbstractProvider
{
    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function version(): \Generator
    {
        $faker = self::faker();

        yield from self::provideDataForValues(
            self::values('semver', $faker, 'semver')
        );
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function preRelease(): \Generator
    {
        $faker = self::faker();

        yield from self::provideDataForValues(
            self::values('version-pre-release', $faker, 'semver', [true, false])
        );
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function build(): \Generator
    {
        $faker = self::faker();

        yield from self::provideDataForValues(
            self::values('version-build', $faker, 'semver', [false, true])
        );
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function preReleaseBuild(): \Generator
    {
        $faker = self::faker();

        yield from self::provideDataForValues(
            self::values('version-build', $faker, 'semver', [true, true])
        );
    }


}