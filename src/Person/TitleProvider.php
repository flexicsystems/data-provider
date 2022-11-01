<?php

namespace Flexic\DataProvider\Person;

use Flexic\DataProvider\AbstractProvider;

class TitleProvider extends AbstractProvider
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
    public static function female(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return \in_array($key, ['title-mrs', 'title-ms'], true);
        });
    }

    /**
     * @return \Generator<string, array{0: array}>
     */
    public static function male(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'title-mr' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: array}>
     */
    public static function nonBinary(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'title-mx' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: array}>
     */
    public static function honor(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return \in_array($key, ['title-dr', 'title-prof'], true);
        });
    }

    public static function values(): array
    {
        return [
            'title-mr' => 'Mr.',
            'title-mrs' => 'Mrs.',
            'title-ms' => 'Ms.',
            'title-miss' => 'Miss',
            'title-mx' => 'Mx.',
            'title-dr' => 'Dr.',
            'title-prof' => 'Prof.',
        ];
    }
}