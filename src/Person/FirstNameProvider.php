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

final class FirstNameProvider extends AbstractProvider
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
    public static function male(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key) {
            return 'first-name-male' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function female(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key) {
            return 'first-name-female' === $key;
        });
    }

    public static function values(): array
    {
        $faker = self::faker();

        return [
            'first-name-male' => $faker->firstNameMale(),
            'first-name-female' => $faker->firstNameFemale(),
        ];
    }
}
