<?php

namespace Flexic\DataProvider\Coordinates;

use Flexic\DataProvider\AbstractProvider;

class LongitudeProvider extends AbstractProvider
{
    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function arbitrary(): \Generator
    {
        yield from self::provideDataForValues(self::values());
    }

    public static function values(): array
    {
        $faker = self::faker();

        return [
            'latitude' => $faker->longitude(),
        ];
    }
}