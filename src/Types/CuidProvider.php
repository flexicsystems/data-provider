<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider\Types;

use Flexic\DataProvider\AbstractProvider;

final class CuidProvider extends AbstractProvider
{
    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function long(): \Generator
    {
        yield from self::provideDataForValues([
            'cuid' => \EndyJasmi\Cuid::cuid(),
        ]);
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function short(): \Generator
    {
        yield from self::provideDataForValues([
            'cuid-short' => \EndyJasmi\Cuid::slug(),
        ]);
    }
}
