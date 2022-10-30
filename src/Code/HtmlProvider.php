<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider\Code;

use Flexic\DataProvider\AbstractProvider;

final class HtmlProvider extends AbstractProvider
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
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key) {
            return 'html' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function simple(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key) {
            return 'html-simple' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function complex(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key) {
            return 'html-complex' === $key;
        });
    }

    public static function values(): array
    {
        $faker = self::faker();

        return [
            'html-random' => $faker->randomHtml(),
            'html-simple' => $faker->randomHtml(1, 1),
            'html-complex' => $faker->randomHtml(10, 10),
        ];
    }
}
