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
    public static function email(): \Generator
    {
        $faker = self::faker();

        yield from self::provideDataForValues([
            'email' => $faker->email(),
        ]);
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function safeEmail(): \Generator
    {
        $faker = self::faker();

        yield from self::provideDataForValues([
            'safe-email' => $faker->safeEmail(),
        ]);
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function freeEmail(): \Generator
    {
        $faker = self::faker();

        yield from self::provideDataForValues([
            'free-email' => $faker->freeEmail(),
        ]);
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function companyEmail(): \Generator
    {
        $faker = self::faker();

        yield from self::provideDataForValues([
            'company-email' => $faker->companyEmail(),
        ]);
    }
}
