<?php

namespace Flexic\DataProvider\DateTime;

use Flexic\DataProvider\AbstractProvider;

class TimeZoneProvider extends AbstractProvider
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
    public static function us(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'timezone-us' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function canada(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'timezone-canada' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function europe(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'timezone-europe' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function america(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'timezone-america' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function southAmerica(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'timezone-south-america' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function asia(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'timezone-asia' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function australia(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'timezone-australia' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function africa(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'timezone-africa' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function india(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'timezone-india' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function pacific(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'timezone-pacific' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function antarctica(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'timezone-antarctica' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function arctic(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'timezone-arctic' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function atlantic(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'timezone-atlantic' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function russia(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'timezone-russia' === $key;
        });
    }

    public static function values(): array
    {
        $faker = self::faker();

        return [
            'timezone-random' => $faker->timezone(),
            'timezone-us' => $faker->timezone('US'),
            'timezone-canada' => $faker->timezone('CA'),
            'timezone-europe' => $faker->timezone('Europe'),
            'timezone-america' => $faker->timezone('America'),
            'timezone-south-america' => $faker->timezone('South America'),
            'timezone-asia' => $faker->timezone('Asia'),
            'timezone-australia' => $faker->timezone('Australia'),
            'timezone-africa' => $faker->timezone('Africa'),
            'timezone-india' => $faker->timezone('India'),
            'timezone-pacific' => $faker->timezone('Pacific'),
            'timezone-antarctica' => $faker->timezone('Antarctica'),
            'timezone-arctic' => $faker->timezone('Arctic'),
            'timezone-atlantic' => $faker->timezone('Atlantic'),
            'timezone-russian' => $faker->timezone('Russian'),
        ];
    }
}