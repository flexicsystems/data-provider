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
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key) {
            return 'html' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function flat(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key) {
            return 'html-flat' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function deep(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key) {
            return 'html-deep' === $key;
        });
    }

    public static function values(): array
    {
        $faker = self::faker();

        return [
            'html' => $faker->randomHtml(),
            'html-flat' => $faker->randomHtml(1, 1),
            'html-deep' => $faker->randomHtml(10, 10),
        ];
    }
}
