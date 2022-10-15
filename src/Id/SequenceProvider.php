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

final class SequenceProvider extends AbstractProvider
{
    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function short(): \Generator
    {
        yield from self::provideMultipleDataForValues(
            self::values(10),
        );
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function long(): \Generator
    {
        yield from self::provideMultipleDataForValues(
            self::values(1000),
        );
    }

    /**
     * @return \Generator<string, array{0: string}>
     */
    public static function extraLong(): \Generator
    {
        yield from self::provideMultipleDataForValues(
            self::values(100000),
        );
    }

    public static function values(int $max): array
    {
        $values = [];
        $i = 1;

        while ($i <= $max) {
            $values[\sprintf('sequence-%s', $i)] = $i;
            ++$i;
        }

        return $values;
    }
}
