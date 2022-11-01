<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider\Test\DateTime;

use Flexic\DataProvider\Test\AbstractTestCase;
use Flexic\DataProvider\Test\TestUtil;

/**
 * @internal
 *
 * @covers \Flexic\DataProvider\DateTime\DayTimeProvider
 */
final class DayTimeProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\DayTimeProvider::arbitrary());

        self::assertIsString($value);
        self::assertContains($value, \Flexic\DataProvider\DateTime\DayTimeProvider::values());
        self::assertLength(2, $value);
        self::assertStringContainsOnly('/[a-z]/', $value);
        self::assertMatchesRegularExpression('/^(am|pm)$/', $value);
    }

    public function testAm(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\DayTimeProvider::am());

        self::assertIsString($value);
        self::assertContains($value, \Flexic\DataProvider\DateTime\DayTimeProvider::values());
        self::assertLength(2, $value);
        self::assertSame('am', $value);
    }

    public function testPm(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\DayTimeProvider::pm());

        self::assertIsString($value);
        self::assertContains($value, \Flexic\DataProvider\DateTime\DayTimeProvider::values());
        self::assertLength(2, $value);
        self::assertSame('pm', $value);
    }
}
