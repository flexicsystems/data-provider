<?php

namespace Flexic\DataProvider\DateTime;

use Flexic\DataProvider\AbstractProvider;

class TimestampProvider extends AbstractProvider
{
    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function current(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'timestamp-current' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function veryNearFuture(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'timestamp-very-near-future' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function nearFuture(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'timestamp-near-future' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function future(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'timestamp-future' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function farFuture(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'timestamp-far-future' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function veryNearHistory(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'timestamp-very-near-history' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function nearHistory(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'timestamp-near-history' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function history(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'timestamp-history' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function farHistory(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'timestamp-far-history' === $key;
        });
    }

    public static function values(): array
    {
        $faker = self::faker();

        return [
            'timestamp-current' => $faker->unixTime('now'),
            'timestamp-very-near-future' => $faker->unixTime('+15 minutes'),
            'timestamp-near-future' => $faker->unixTime('+1 week'),
            'timestamp-future' => $faker->unixTime('+1 year'),
            'timestamp-far-future' => $faker->unixTime('+10 years'),
            'timestamp-very-near-history' => $faker->unixTime('-15 minutes'),
            'timestamp-near-history' => $faker->unixTime('-1 week'),
            'timestamp-history' => $faker->unixTime('-1 year'),
            'timestamp-far-history' => $faker->unixTime('-10 years'),
        ];
    }
}