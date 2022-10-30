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

final class IpProvider extends AbstractProvider
{
    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function ipv4(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'ipv4' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function localIpv4(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'local-ipv4' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function ipv6(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'ipv6' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function macAddress(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'mac-address' === $key;
        });
    }

    public static function values(): array
    {
        $faker = self::faker();

        return [
            'ipv4' => $faker->ipv4(),
            'local-ipv4' => $faker->localIpv4(),
            'ipv6' => $faker->ipv6(),
            'mac-address' => $faker->macAddress(),
        ];
    }
}
