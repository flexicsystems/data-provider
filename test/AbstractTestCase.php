<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider\Test;

use PHPUnit\Framework;
use PHPUnit\Framework\Constraint\IsIdentical;
use PHPUnit\Framework\Constraint\RegularExpression;

/**
 * @internal
 *
 * @coversNothing
 */
abstract class AbstractTestCase extends Framework\TestCase
{
    public static function assertStringIsUppercase($actual, string $message = ''): void
    {
        self::assertThat(
            $actual,
            new RegularExpression('/[A-Z]/i'),
            $message,
        );
    }

    public static function assertStringIsLowercase($actual, string $message = ''): void
    {
        self::assertThat(
            $actual,
            new RegularExpression('/[a-z]/i'),
            $message,
        );
    }

    public static function assertLength(int $expected, string $actual, string $message = ''): void
    {
        self::assertThat(
            \mb_strlen($actual),
            new IsIdentical($expected),
            $message,
        );
    }

    public static function assertArrayHasKeyBetween(int $start, int $end, array $actual): void
    {
        $i = $start;

        while ($i <= $end) {
            self::assertArrayHasKey($i, $actual);
            ++$i;
        }
    }

    public static function assertStringContainsOnly(string $expected, string $actual, string $message = ''): void
    {
        self::assertThat(
            $actual,
            new RegularExpression($expected),
            $message,
        );
    }

    public static function assertIsAfter(string $expected, int $actual, bool $flatTime = false, string $message = ''): void {
        $datetime = (new \DateTimeImmutable('now'))->modify($expected);

        if ($flatTime) {
            $datetime = $datetime->setTime(0, 0, 0);
        }

        self::assertThat(
            $actual,
            self::greaterThanOrEqual($datetime->getTimestamp()),
            $message,
        );
    }

    public static function assertIsBefore(string $expected, int $actual, bool $flatTime = false, string $message = ''): void
    {
        $datetime = (new \DateTimeImmutable('now'))->modify($expected);

        if ($flatTime) {
            $datetime = $datetime->setTime(0, 0, 0);
        }

        self::assertThat(
            $actual,
            self::lessThanOrEqual($datetime->getTimestamp()),
            $message,
        );
    }
}
