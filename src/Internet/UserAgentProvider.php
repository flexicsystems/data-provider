<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider\Internet;

use Flexic\DataProvider\AbstractProvider;

final class UserAgentProvider extends AbstractProvider
{
    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function random(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'user-agent-random' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function chrome(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'user-agent-chrome' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function firefox(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'user-agent-firefox' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function safari(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'user-agent-safari' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function opera(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'user-agent-opera' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function internetExplorer(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'user-agent-internet-explorer' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function msedge(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'user-agent-msedge' === $key;
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
