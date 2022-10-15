<?php

namespace Flexic\DataProvider\Test;

use PHPUnit\Framework;
use PHPUnit\Framework\Constraint\IsIdentical;
use PHPUnit\Framework\Constraint\RegularExpression;

class AbstractTestCase extends Framework\TestCase
{
    public static function assertStringIsUppercase($actual, string $message = ''): void
    {
        static::assertThat(
            $actual,
            new RegularExpression('/[A-Z]/i'),
            $message
        );
    }

    public static function assertStringIsLowercase($actual, string $message = ''): void
    {
        static::assertThat(
            $actual,
            new RegularExpression('/[a-z]/i'),
            $message
        );
    }

    public static function assertLength(int $expected, string $actual, string $message = ''): void
    {
        static::assertThat(
            \strlen($actual),
            new IsIdentical($expected),
            $message
        );
    }
}