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
 * @covers \Flexic\DataProvider\DateTime\AbstractDateProvider
 * @covers \Flexic\DataProvider\DateTime\DateStringProvider
 */
final class DateStringProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\DateStringProvider::arbitrary());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/(([a-zA-Z]+) ([0-9]{1,2}, ([0-9]{4})))/', $value);
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat('!F j, Y', $value));
    }

    public function testNow(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\DateStringProvider::now());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/(([a-zA-Z]+) ([0-9]{1,2}, ([0-9]{4})))/', $value);
        self::assertSame((new \DateTimeImmutable('now'))->format('F j, Y'), $value);
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat('!F j, Y', $value));
    }

    public function testVeryNearFuture(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\DateStringProvider::veryNearFuture());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/(([a-zA-Z]+) ([0-9]{1,2}, ([0-9]{4})))/', $value);
        self::assertIsAfter('now', \DateTimeImmutable::createFromFormat('!F j, Y', $value)->getTimestamp());
        self::assertIsBefore('+2 days', \DateTimeImmutable::createFromFormat('!F j, Y', $value)->getTimestamp());
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat('!F j, Y', $value));
    }

    public function testNearFuture(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\DateStringProvider::nearFuture());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/(([a-zA-Z]+) ([0-9]{1,2}, ([0-9]{4})))/', $value);
        self::assertIsAfter('+2 days', \DateTimeImmutable::createFromFormat('!F j, Y', $value)->getTimestamp());
        self::assertIsBefore('+1 week', \DateTimeImmutable::createFromFormat('!F j, Y', $value)->getTimestamp());
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat('!F j, Y', $value));
    }

    public function testFuture(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\DateStringProvider::future());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/(([a-zA-Z]+) ([0-9]{1,2}, ([0-9]{4})))/', $value);
        self::assertIsAfter('+1 week', \DateTimeImmutable::createFromFormat('!F j, Y', $value)->getTimestamp());
        self::assertIsBefore('+1 year', \DateTimeImmutable::createFromFormat('!F j, Y', $value)->getTimestamp());
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat('!F j, Y', $value));
    }

    public function testFarFuture(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\DateStringProvider::farFuture());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/(([a-zA-Z]+) ([0-9]{1,2}, ([0-9]{4})))/', $value);
        self::assertIsAfter('+1 year', \DateTimeImmutable::createFromFormat('!F j, Y', $value)->getTimestamp());
        self::assertIsBefore('+10 years', \DateTimeImmutable::createFromFormat('!F j, Y', $value)->getTimestamp());
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat('!F j, Y', $value));
    }

    public function testVeryFarFuture(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\DateStringProvider::veryFarFuture());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/(([a-zA-Z]+) ([0-9]{1,2}, ([0-9]{4})))/', $value);
        self::assertIsAfter('+10 years', \DateTimeImmutable::createFromFormat('!F j, Y', $value)->getTimestamp());
        self::assertIsBefore('+100 years', \DateTimeImmutable::createFromFormat('!F j, Y', $value)->getTimestamp());
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat('!F j, Y', $value));
    }

    public function testVeryNearHistory(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\DateStringProvider::veryNearHistory());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/(([a-zA-Z]+) ([0-9]{1,2}, ([0-9]{4})))/', $value);
        self::assertIsBefore('-1 day', \DateTimeImmutable::createFromFormat('!F j, Y', $value)->getTimestamp());
        self::assertIsAfter('-2 days', \DateTimeImmutable::createFromFormat('!F j, Y', $value)->getTimestamp());
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat('!F j, Y', $value));
    }

    public function testNearHistory(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\DateStringProvider::nearHistory());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/(([a-zA-Z]+) ([0-9]{1,2}, ([0-9]{4})))/', $value);
        self::assertIsBefore('-2 days', \DateTimeImmutable::createFromFormat('!F j, Y', $value)->getTimestamp());
        self::assertIsAfter('-1 week', \DateTimeImmutable::createFromFormat('!F j, Y', $value)->getTimestamp());
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat('!F j, Y', $value));
    }

    public function testHistory(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\DateStringProvider::history());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/(([a-zA-Z]+) ([0-9]{1,2}, ([0-9]{4})))/', $value);
        self::assertIsBefore('-1 week', \DateTimeImmutable::createFromFormat('!F j, Y', $value)->getTimestamp());
        self::assertIsAfter('-1 year', \DateTimeImmutable::createFromFormat('!F j, Y', $value)->getTimestamp());
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat('!F j, Y', $value));
    }

    public function testFarHistory(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\DateStringProvider::farHistory());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/(([a-zA-Z]+) ([0-9]{1,2}, ([0-9]{4})))/', $value);
        self::assertIsBefore('-1 year', \DateTimeImmutable::createFromFormat('!F j, Y', $value)->getTimestamp());
        self::assertIsAfter('-10 years', \DateTimeImmutable::createFromFormat('!F j, Y', $value)->getTimestamp());
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat('!F j, Y', $value));
    }

    public function testVeryFarHistory(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\DateStringProvider::veryFarHistory());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/(([a-zA-Z]+) ([0-9]{1,2}, ([0-9]{4})))/', $value);
        self::assertIsBefore('-10 years', \DateTimeImmutable::createFromFormat('!F j, Y', $value)->getTimestamp());
        self::assertIsAfter('-100 years', \DateTimeImmutable::createFromFormat('!F j, Y', $value)->getTimestamp());
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat('!F j, Y', $value));
    }
}
