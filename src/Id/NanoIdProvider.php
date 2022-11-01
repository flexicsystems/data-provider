<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider\Id;

use Flexic\DataProvider\AbstractProvider;
use Hidehalo\Nanoid\Client;

final class NanoIdProvider extends AbstractProvider
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
    public static function normal(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'nanoid-normal' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function dynamic(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'nanoid-dynamic' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function normalShort(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'nanoid-normal-short' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function dynamicShort(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'nanoid-dynamic-short' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function normalLong(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'nanoid-normal-long' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function dynamicLong(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key): bool {
            return 'nanoid-dynamic-long' === $key;
        });
    }

    public static function values(): array
    {
        $client = new Client();

        return [
            'nanoid-normal' => $client->generateId(21, Client::MODE_NORMAL),
            'nanoid-dynamic' => $client->generateId(21, Client::MODE_DYNAMIC),
            'nanoid-normal-short' => $client->generateId(10, Client::MODE_NORMAL),
            'nanoid-dynamic-short' => $client->generateId(10, Client::MODE_DYNAMIC),
            'nanoid-normal-long' => $client->generateId(42, Client::MODE_NORMAL),
            'nanoid-dynamic-long' => $client->generateId(42, Client::MODE_DYNAMIC),
        ];
    }
}
