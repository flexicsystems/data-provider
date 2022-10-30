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

final class ProtocolProvider extends AbstractProvider
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
    public static function http(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key) {
            return 'protocol-http' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function shell(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key) {
            return 'protocol-shell' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function file(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key) {
            return 'protocol-file' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function mail(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key) {
            return 'protocol-mail' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function ip(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key) {
            return 'protocol-ip' === $key;
        });
    }

    public static function values(): array
    {
        $faker = self::faker();

        return [
            'protocol-http' => $faker->randomElement(['http', 'https']),
            'protocol-shell' => $faker->randomElement(['ssh']),
            'protocol-file' => $faker->randomElement(['ftp', 'ftps']),
            'protocol-mail' => $faker->randomElement(['smtp', 'pop3', 'imap']),
            'protocol-ip' => $faker->randomElement(['tcp', 'udp', 'ip']),
        ];
    }
}
