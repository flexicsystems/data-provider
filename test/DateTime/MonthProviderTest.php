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
 * @covers \Flexic\DataProvider\DateTime\MonthProvider
 */
final class MonthProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\MonthProvider::arbitrary());

        self::assertIsString($value);
        self::assertContains($value, \Flexic\DataProvider\DateTime\MonthProvider::values());
    }

    public function testAfterNow(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\MonthProvider::afterNow());

        self::assertIsString($value);
        self::assertContains($value, \Flexic\DataProvider\DateTime\MonthProvider::values());

        $monthNumber = \date('m', \strtotime(\sprintf('%s %s', $value, (new \DateTimeImmutable('now'))->format('Y'))));

        self::assertGreaterThan((new \DateTimeImmutable('now'))->format('m'), $monthNumber);
        self::assertLessThanOrEqual(12, $monthNumber);
    }

    public function testBeforeNow(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\MonthProvider::beforeNow());

        self::assertIsString($value);
        self::assertContains($value, \Flexic\DataProvider\DateTime\MonthProvider::values());

        $monthNumber = \date('m', \strtotime(\sprintf('%s %s', $value, (new \DateTimeImmutable('now'))->format('Y'))));

        self::assertLessThan((new \DateTimeImmutable('now'))->format('m'), $monthNumber);
        self::assertGreaterThanOrEqual(1, $monthNumber);
    }

    public function testNow(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\MonthProvider::now());

        self::assertIsString($value);
        self::assertContains($value, \Flexic\DataProvider\DateTime\MonthProvider::values());

        $monthNumber = \date('m', \strtotime(\sprintf('%s %s', $value, (new \DateTimeImmutable('now'))->format('Y'))));

        self::assertSame((new \DateTimeImmutable('now'))->format('m'), $monthNumber);
    }
}
