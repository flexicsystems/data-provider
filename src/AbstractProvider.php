<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider;

abstract class AbstractProvider extends \Ergebnis\DataProvider\AbstractProvider
{
    final protected static function provideMultipleDataForValues(array $values): \Generator
    {
        if ([] === $values) {
            throw \Ergebnis\DataProvider\Exception\EmptyValues::create();
        }

        $yieldValues = [];

        foreach ($values as $key => $value) {
            $yieldValues[] = [
                $value,
            ];
        }

        yield $yieldValues;
    }

    final protected static function provideDataForValuesWhereKey(array $values, \Closure $test): \Generator
    {
        if ([] === $values) {
            throw \Ergebnis\DataProvider\Exception\EmptyValues::create();
        }

        $filtered = \array_filter($values, static function ($value, $key) use ($test): bool {
            return true === $test($key);
        }, \ARRAY_FILTER_USE_BOTH);

        if ([] === $filtered) {
            throw \Ergebnis\DataProvider\Exception\EmptyValues::filtered();
        }

        yield from self::provideDataForValues($filtered);
    }
}
