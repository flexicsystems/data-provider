<?php

namespace Flexic\DataProvider\Person;

use Flexic\DataProvider\AbstractProvider;

class FirstNameProvider extends AbstractProvider
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
    public static function male(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key) {
            return 'first-name-male' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: array}>
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