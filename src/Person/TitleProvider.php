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
            return \substr($key, -1, 9) === 'title-mrs' || \substr($key, -1, 8) === 'title-ms' || \substr($key, -1, 10) === 'title-miss';
        });
    }

    /**
     * @return \Generator<string, array{0: array}>
     */
    public static function male(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return \strpos($key, 'title-mr') === 0;
        });
    }

    /**
     * @return \Generator<string, array{0: array}>
     */
    public static function nonBinary(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return \strpos($key, 'title-mx') === 0;
        });
    }

    /**
     * @return \Generator<string, array{0: array}>
     */
    public static function honor(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return \substr($key, -1, 2) === 'dr' || \substr($key, -1, 4) === 'prod';
        });
    }

    public static function values(): array
    {
        return [
            'title-dr' => 'Dr.',
            'title-prof' => 'Prof.',
            'title-prof-dr' => 'Prof. Dr.',
            'title-mr' => 'Mr.',
            'title-mr-dr' => 'Mr. Dr.',
            'title-mr-prof' => 'Mr. Prof.',
            'title-mr-prof-dr' => 'Mr. Prof. Dr.',
            'title-mrs' => 'Mrs.',
            'title-ms' => 'Ms.',
            'title-miss' => 'Miss',
            'title-mrs-dr' => 'Mrs. Dr.',
            'title-ms-dr' => 'Ms. Dr.',
            'title-miss-dr' => 'Miss Dr.',
            'title-mrs-prof' => 'Mrs. Prof.',
            'title-ms-prof' => 'Ms. Prof.',
            'title-miss-prof' => 'Miss Prof.',
            'title-mrs-prof-dr' => 'Mrs. Prof. Dr.',
            'title-ms-prof-dr' => 'Ms. Prof. Dr.',
            'title-miss-prof-dr' => 'Miss Prof. Dr.',
            'title-mx' => 'Mx.',
            'title-mx-dr' => 'Mx. Dr.',
            'title-mx-prod' => 'Mx. Prof.',
            'title-mx-prod-dr' => 'Mx. Prof. Dr.',
        ];
    }
}