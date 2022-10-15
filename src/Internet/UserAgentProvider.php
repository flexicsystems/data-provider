<?php

namespace Flexic\DataProvider\Internet;

use Flexic\DataProvider\AbstractProvider;

class UserAgentProvider extends AbstractProvider
{
    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function random(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return $key === 'user-agent-random';
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function chrome(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return $key === 'user-agent-chrome';
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function firefox(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return $key === 'user-agent-firefox';
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function safari(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return $key === 'user-agent-safari';
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function opera(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return $key === 'user-agent-opera';
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function internetExplorer(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return $key === 'user-agent-internet-explorer';
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function msedge(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return $key === 'user-agent-msedge';
        });
    }

    public static function values(): array
    {
        $faker = self::faker();

        return [
            'user-agent-random' => $faker->userAgent(),
            'user-agent-chrome' => $faker->chrome(),
            'user-agent-firefox' => $faker->firefox(),
            'user-agent-safari' => $faker->safari(),
            'user-agent-opera' => $faker->opera(),
            'user-agent-internet-explorer' => $faker->internetExplorer(),
            'user-agent-msedge' => $faker->msedge(),
        ];
    }
}