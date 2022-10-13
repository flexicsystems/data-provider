<?php

namespace Flexic\DataProvider;

class IpProvider extends AbstractProvider
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