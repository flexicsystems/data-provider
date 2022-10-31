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
use Flexic\DataProvider\Generator\CssGenerator;

final class CssProvider extends AbstractProvider
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
            return 'css-normal' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function simple(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key) {
            return 'css-simple' === $key;
        });
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function complex(): \Generator
    {
        yield from self::provideDataForValuesWhereKey(self::values(), static function (string $key) {
            return 'css-complex' === $key;
        });
    }

    public static function values(): array
    {
        return [
            'css-normal' => CssGenerator::random(1, 100),
            'css-simple' => CssGenerator::random(1, 1),
            'css-complex' => CssGenerator::random(100, 10000),
        ];
    }
}
