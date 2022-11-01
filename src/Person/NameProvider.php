<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider\Person;

use Flexic\DataProvider\AbstractProvider;

final class NameProvider extends AbstractProvider
{
    /**
     * @return \Generator<string, array{0: array}>
     */
    public static function arbitrary(): \Generator
    {
        yield from self::provideDataForValues(self::values());
    }

    /**
     * @return \Generator<string, array{0: array}>
     */
    public static function arbitrarySingle(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return \in_array($key, ['name-male', 'name-female'], true);
        });
    }

    /**
     * @return \Generator<string, array{0: array}>
     */
    public static function arbitraryDouble(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return \in_array($key, ['name-male-double', 'name-female-double'], true);
        });
    }

    /**
     * @return \Generator<string, array{0: array}>
     */
    public static function male(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'name-male' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: array}>
     */
    public static function female(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'name-female' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: array}>
     */
    public static function maleDouble(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'name-male-double' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: array}>
     */
    public static function femaleDouble(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'name-female-double' === $key;
        });
    }

    public static function values(): array
    {
        $faker = self::faker();

        return [
            'name-male' => \sprintf(
                '%s%s',
                $faker->firstNameMale(),
                $faker->lastName(),
            ),
            'name-female' => \sprintf(
                '%s %s',
                $faker->firstNameFemale(),
                $faker->lastName(),
            ),
            'name-male-double' => \sprintf(
                '%s %s %s',
                $faker->firstNameMale(),
                $faker->firstNameMale(),
                $faker->lastName(),
            ),
            'name-female-double' => \sprintf(
                '%s %s %s',
                $faker->firstNameFemale(),
                $faker->firstNameFemale(),
                $faker->lastName(),
            ),
        ];
    }
}
