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
 * @covers \Flexic\DataProvider\DateTime\MonthNumberProvider
 */
final class MonthNumberProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::int(\Flexic\DataProvider\DateTime\MonthNumberProvider::arbitrary());

        self::assertIsInt($value);
        self::assertContains($value, \Flexic\DataProvider\DateTime\MonthNumberProvider::values());
        self::assertGreaterThanOrEqual(1, $value);
        self::assertLessThanOrEqual(12, $value);
    }

    public function testAfterNow(): void
    {
        $value = TestUtil::int(\Flexic\DataProvider\DateTime\MonthNumberProvider::afterNow());

        self::assertIsInt($value);
        self::assertContains($value, \Flexic\DataProvider\DateTime\MonthNumberProvider::values());

        self::assertGreaterThan((int) (new \DateTimeImmutable('now'))->format('n'), $value);
        self::assertLessThanOrEqual(12, $value);
    }

    public function testBeforeNow(): void
    {
        $value = TestUtil::int(\Flexic\DataProvider\DateTime\MonthNumberProvider::beforeNow());

        self::assertIsInt($value);
        self::assertContains($value, \Flexic\DataProvider\DateTime\MonthNumberProvider::values());

        self::assertLessThan((int) (new \DateTimeImmutable('now'))->format('n'), $value);
        self::assertGreaterThanOrEqual(1, $value);
    }

    public function testNow(): void
    {
        $value = TestUtil::int(\Flexic\DataProvider\DateTime\MonthNumberProvider::now());

        self::assertIsInt($value);
        self::assertContains($value, \Flexic\DataProvider\DateTime\MonthNumberProvider::values());

        self::assertSame((int) (new \DateTimeImmutable('now'))->format('n'), $value);
    }
}
