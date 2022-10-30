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
 * @covers \Flexic\DataProvider\DateTime\DateProvider
 */
final class DateProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\DateProvider::arbitrary());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([0-9]{4}-[0-9]{2}-[0-9]{2})/', $value);
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat('!Y-m-d', $value));
    }

    public function testNow(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\DateProvider::now());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([0-9]{4}-[0-9]{2}-[0-9]{2})/', $value);
        self::assertSame((new \DateTimeImmutable('now'))->format('Y-m-d'), $value);
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat('!Y-m-d', $value));
    }

    public function testVeryNearFuture(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\DateProvider::veryNearFuture());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([0-9]{4}-[0-9]{2}-[0-9]{2})/', $value);
        self::assertIsAfter('now', \DateTimeImmutable::createFromFormat('!Y-m-d', $value)->getTimestamp());
        self::assertIsBefore('+2 days', \DateTimeImmutable::createFromFormat('!Y-m-d', $value)->getTimestamp());
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat('!Y-m-d', $value));
    }

    public function testNearFuture(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\DateProvider::nearFuture());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([0-9]{4}-[0-9]{2}-[0-9]{2})/', $value);
        self::assertIsAfter('+2 days', \DateTimeImmutable::createFromFormat('!Y-m-d', $value)->getTimestamp());
        self::assertIsBefore('+1 week', \DateTimeImmutable::createFromFormat('!Y-m-d', $value)->getTimestamp());
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat('!Y-m-d', $value));
    }

    public function testFuture(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\DateProvider::future());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([0-9]{4}-[0-9]{2}-[0-9]{2})/', $value);
        self::assertIsAfter('+1 week', \DateTimeImmutable::createFromFormat('!Y-m-d', $value)->getTimestamp());
        self::assertIsBefore('+1 year', \DateTimeImmutable::createFromFormat('!Y-m-d', $value)->getTimestamp());
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat('!Y-m-d', $value));
    }

    public function testFarFuture(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\DateProvider::farFuture());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([0-9]{4}-[0-9]{2}-[0-9]{2})/', $value);
        self::assertIsAfter('+1 year', \DateTimeImmutable::createFromFormat('!Y-m-d', $value)->getTimestamp());
        self::assertIsBefore('+10 years', \DateTimeImmutable::createFromFormat('!Y-m-d', $value)->getTimestamp());
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat('!Y-m-d', $value));
    }

    public function testVeryFarFuture(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\DateProvider::veryFarFuture());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([0-9]{4}-[0-9]{2}-[0-9]{2})/', $value);
        self::assertIsAfter('+10 years', \DateTimeImmutable::createFromFormat('!Y-m-d', $value)->getTimestamp());
        self::assertIsBefore('+100 years', \DateTimeImmutable::createFromFormat('!Y-m-d', $value)->getTimestamp());
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat('!Y-m-d', $value));
    }

    public function testVeryNearHistory(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\DateProvider::veryNearHistory());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([0-9]{4}-[0-9]{2}-[0-9]{2})/', $value);
        self::assertIsBefore('-1 day', \DateTimeImmutable::createFromFormat('!Y-m-d', $value)->getTimestamp());
        self::assertIsAfter('-2 days', \DateTimeImmutable::createFromFormat('!Y-m-d', $value)->getTimestamp());
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat('!Y-m-d', $value));
    }

    public function testNearHistory(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\DateProvider::nearHistory());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([0-9]{4}-[0-9]{2}-[0-9]{2})/', $value);
        self::assertIsBefore('-2 days', \DateTimeImmutable::createFromFormat('!Y-m-d', $value)->getTimestamp());
        self::assertIsAfter('-1 week', \DateTimeImmutable::createFromFormat('!Y-m-d', $value)->getTimestamp());
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat('!Y-m-d', $value));
    }

    public function testHistory(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\DateProvider::history());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([0-9]{4}-[0-9]{2}-[0-9]{2})/', $value);
        self::assertIsBefore('-1 week', \DateTimeImmutable::createFromFormat('!Y-m-d', $value)->getTimestamp());
        self::assertIsAfter('-1 year', \DateTimeImmutable::createFromFormat('!Y-m-d', $value)->getTimestamp());
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat('!Y-m-d', $value));
    }

    public function testFarHistory(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\DateProvider::farHistory());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([0-9]{4}-[0-9]{2}-[0-9]{2})/', $value);
        self::assertIsBefore('-1 year', \DateTimeImmutable::createFromFormat('!Y-m-d', $value)->getTimestamp());
        self::assertIsAfter('-10 years', \DateTimeImmutable::createFromFormat('!Y-m-d', $value)->getTimestamp());
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat('!Y-m-d', $value));
    }

    public function testVeryFarHistory(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\DateProvider::veryFarHistory());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([0-9]{4}-[0-9]{2}-[0-9]{2})/', $value);
        self::assertIsBefore('-10 years', \DateTimeImmutable::createFromFormat('!Y-m-d', $value)->getTimestamp());
        self::assertIsAfter('-100 years', \DateTimeImmutable::createFromFormat('!Y-m-d', $value)->getTimestamp());
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat('!Y-m-d', $value));
    }
}
