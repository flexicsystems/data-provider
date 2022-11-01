<?php

namespace Flexic\DataProvider\Person;

use Flexic\DataProvider\AbstractProvider;

class LastNameProvider extends AbstractProvider
{
    /**
     * @return \Generator<string, array{0: array}>
     */
    public static function arbitrary(): \Generator
    {
        yield from self::provideDataForValues(self::values());
    }

    public static function values(): array
    {
        $faker = self::faker();

        return [
            'last-name' => $faker->lastName(),
        ];
    }
}