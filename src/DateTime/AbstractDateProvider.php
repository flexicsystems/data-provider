<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider\DateTime;

use Flexic\DataProvider\AbstractProvider;

abstract class AbstractDateProvider extends AbstractProvider
{
    public static function generatedValues(string $prefix): array
    {
        return [
            \sprintf('%s-now', $prefix) => self::random(),
            \sprintf('%s-very-near-future', $prefix) => self::random('+1 day', '+2 days'),
            \sprintf('%s-near-future', $prefix) => self::random('+2 days', '+1 week'),
            \sprintf('%s-future', $prefix) => self::random('+1 week', '+1 year'),
            \sprintf('%s-far-future', $prefix) => self::random('+1 year', '+10 years'),
            \sprintf('%s-very-far-future', $prefix) => self::random('+10 years', '+100 years'),
            \sprintf('%s-very-near-history', $prefix) => self::random('-2 days', '-1 day'),
            \sprintf('%s-near-history', $prefix) => self::random('-1 week', '-2 days'),
            \sprintf('%s-history', $prefix) => self::random('-1 year', '-1 week'),
            \sprintf('%s-far-history', $prefix) => self::random('-10 years', '-1 year'),
            \sprintf('%s-very-far-history', $prefix) => self::random('-100 years', '-10 years'),
        ];
    }

    public static function random(string $min = 'now', string $max = 'now'): \DateTimeImmutable
    {
        $faker = self::faker();
        $minTimestamp = (new \DateTimeImmutable('now'))->modify($min)->getTimestamp();
        $maxTimestamp = (new \DateTimeImmutable('now'))->modify($max)->getTimestamp();

        return (new \DateTimeImmutable('now'))->setTimestamp(
            $faker->numberBetween($minTimestamp, $maxTimestamp),
        );
    }
}
