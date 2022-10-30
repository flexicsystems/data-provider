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
 * @covers \Flexic\DataProvider\DateTime\TimestampProvider
 */
final class TimestampProviderTest extends AbstractTestCase
{
    public function testArbitraryTimestamp(): void
    {
        $value = TestUtil::int(\Flexic\DataProvider\DateTime\TimestampProvider::arbitrary());

        self::assertIsAfter('-100 years', $value);
        self::assertIsBefore('+100 years', $value);
        self::assertIsInt($value);
    }

    public function testCurrentTimestamp(): void
    {
        $value = TestUtil::int(\Flexic\DataProvider\DateTime\TimestampProvider::now());

        self::assertIsAfter('-1 second', $value);
        self::assertIsBefore('+1 second', $value);
        self::assertIsInt($value);
    }

    public function testVeryNearFutureTimestamp(): void
    {
        $value = TestUtil::int(\Flexic\DataProvider\DateTime\TimestampProvider::veryNearFuture());

        self::assertIsAfter('+1 day', $value);
        self::assertIsBefore('+2 days', $value);
        self::assertIsInt($value);
    }

    public function testNearFutureTimestamp(): void
    {
        $value = TestUtil::int(\Flexic\DataProvider\DateTime\TimestampProvider::nearFuture());

        self::assertIsAfter('+2 days', $value);
        self::assertIsBefore('+1 week', $value);
        self::assertIsInt($value);
    }

    public function testFutureTimestamp(): void
    {
        $value = TestUtil::int(\Flexic\DataProvider\DateTime\TimestampProvider::future());

        self::assertIsAfter('+1 week', $value);
        self::assertIsBefore('+1 year', $value);
        self::assertIsInt($value);
    }

    public function testFarFutureTimestamp(): void
    {
        $value = TestUtil::int(\Flexic\DataProvider\DateTime\TimestampProvider::farFuture());

        self::assertIsAfter('+1 year', $value);
        self::assertIsBefore('+10 years', $value);
        self::assertIsInt($value);
    }

    public function testVeryFarFutureTimestamp(): void
    {
        $value = TestUtil::int(\Flexic\DataProvider\DateTime\TimestampProvider::veryFarFuture());

        self::assertIsAfter('+10 years', $value);
        self::assertIsBefore('+100 years', $value);
        self::assertIsInt($value);
    }

    public function testVeryNearHistoryTimestamp(): void
    {
        $value = TestUtil::int(\Flexic\DataProvider\DateTime\TimestampProvider::veryNearHistory());

        self::assertIsAfter('-2 days', $value);
        self::assertIsBefore('-1 day', $value);
        self::assertIsInt($value);
    }

    public function testNearHistoryTimestamp(): void
    {
        $value = TestUtil::int(\Flexic\DataProvider\DateTime\TimestampProvider::nearHistory());

        self::assertIsAfter('-1 week', $value);
        self::assertIsBefore('-2 days', $value);
        self::assertIsInt($value);
    }

    public function testHistoryTimestamp(): void
    {
        $value = TestUtil::int(\Flexic\DataProvider\DateTime\TimestampProvider::history());

        self::assertIsAfter('-1 year', $value);
        self::assertIsBefore('-1 week', $value);
        self::assertIsInt($value);
    }

    public function testFarHistoryTimestamp(): void
    {
        $value = TestUtil::int(\Flexic\DataProvider\DateTime\TimestampProvider::farHistory());

        self::assertIsAfter('-10 years', $value);
        self::assertIsBefore('-1 year', $value);
        self::assertIsInt($value);
    }

    public function testVeryFarHistoryTimestamp(): void
    {
        $value = TestUtil::int(\Flexic\DataProvider\DateTime\TimestampProvider::veryFarHistory());

        self::assertIsAfter('-100 years', $value);
        self::assertIsBefore('-10 years', $value);
        self::assertIsInt($value);
    }
}
