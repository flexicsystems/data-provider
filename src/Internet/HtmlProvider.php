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

final class HtmlProvider extends AbstractProvider
{
    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function normal(): \Generator
    {
        $faker = self::faker();

        yield from self::provideDataForValues([
            'html' => $faker->randomHtml(),
        ]);
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function flat(): \Generator
    {
        $faker = self::faker();

        yield from self::provideDataForValues([
            'html-flat' => $faker->randomHtml(1, 1),
        ]);
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function deep(): \Generator
    {
        $faker = self::faker();

        yield from self::provideDataForValues([
            'html-deep' => $faker->randomHtml(10, 10),
        ]);
    }
}
