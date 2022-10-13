<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider;

final class IpProvider extends AbstractProvider
{
    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function ipv4(): \Generator
    {
        $faker = self::faker();

        yield from self::provideDataForValues([
            'ip-v4' => $faker->ipv4(),
        ]);
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function localIpv4(): \Generator
    {
        $faker = self::faker();

        yield from self::provideDataForValues([
            'local-ip-v4' => $faker->localIpv4(),
        ]);
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function ipv6(): \Generator
    {
        $faker = self::faker();

        yield from self::provideDataForValues([
            'ip-v6' => $faker->ipv6(),
        ]);
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function macAddress(): \Generator
    {
        $faker = self::faker();

        yield from self::provideDataForValues([
            'mac-address' => $faker->macAddress(),
        ]);
    }
}
