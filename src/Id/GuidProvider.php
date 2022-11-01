<?php

namespace Flexic\DataProvider\Id;

use Flexic\DataProvider\AbstractProvider;
use Flexic\DataProvider\Generator\GuidGenerator;

class GuidProvider extends AbstractProvider
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
    public static function v4(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'guid-v4' === $key;
        });
    }

    public static function values(): array
    {
        return [
            'guid-v4' => GuidGenerator::generate()
        ];
    }
}