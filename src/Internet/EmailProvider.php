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

final class EmailProvider extends AbstractProvider
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
    public static function email(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key) {
            return 'email' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function safeEmail(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key) {
            return 'safe-email' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function freeEmail(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key) {
            return 'free-email' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function companyEmail(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key) {
            return 'company-email' === $key;
        });
    }

    public static function values(): array
    {
        $faker = self::faker();

        return [
            'email' => $faker->email(),
            'safe-email' => $faker->safeEmail(),
            'free-email' => $faker->freeEmail(),
            'company-email' => $faker->companyEmail(),
        ];
    }
}
