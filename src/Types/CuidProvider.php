<?php

namespace Flexic\DataProvider\Types;

use Flexic\DataProvider\AbstractProvider;

class CuidProvider extends AbstractProvider
{
    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function cuid(): \Generator
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