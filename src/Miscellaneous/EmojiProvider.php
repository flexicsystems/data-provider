<?php

namespace Flexic\DataProvider\Miscellaneous;

use Flexic\DataProvider\AbstractProvider;

class EmojiProvider extends AbstractProvider
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
            'emoji' => $faker->emoji(),
        ];
    }
}