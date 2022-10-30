<?php

namespace Flexic\DataProvider\DateTime;

use Flexic\DataProvider\AbstractProvider;

class YearProvider extends AbstractProvider
{
    /**
     * @return \Generator<string, array{0: int}>
     */
    public static function arbitrary(): \Generator
    {
        yield from self::provideDataForValues(self::values());
    }

    /**
     * @return \Generator<string, array{0: int}>
     */
    public static function current(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'current' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: int}>
     */
    public static function next(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'next' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: int}>
     */
    public static function previous(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'previous' === $key;
        });
    }

    public static function values(): array
    {
        $faker = self::faker();

        return [
            'current' => (int) (new \DateTimeImmutable('now'))->format('Y'),
            'next' => (int) (new \DateTimeImmutable('now'))->modify('+1 year')->format('Y'),
            'previous' => (int) (new \DateTimeImmutable('now'))->modify('-1 year')->format('Y'),
            'random' => (int) (new \DateTimeImmutable('now'))->modify(\sprintf(
                '%s%s years',
                $faker->randomElement(['+', '-']),
                $faker->numberBetween(
                    (int) (new \DateTimeImmutable('now'))->format('Y') - 1000,
                    (int) (new \DateTimeImmutable('now'))->format('Y') + 1000,
                )
            ))->format('Y'),
        ];
    }
}