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
 * @covers \Flexic\DataProvider\DateTime\Iso8601Provider
 */
final class Iso8601ProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\Iso8601Provider::arbitrary());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}:[0-9]{2}\+[0-9]{2}:[0-9]{2})/', $value);
    }

    public function testNow(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\Iso8601Provider::now());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}:[0-9]{2}\+[0-9]{2}:[0-9]{2})/', $value);
        self::assertSame((new \DateTimeImmutable('now'))->format(\DateTime::ATOM), $value);
    }

    public function testVeryNearFuture(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\Iso8601Provider::veryNearFuture());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}:[0-9]{2}\+[0-9]{2}:[0-9]{2})/', $value);
        self::assertIsAfter('+1 day', (new \DateTimeImmutable($value))->getTimestamp());
        self::assertIsBefore('+2 days', (new \DateTimeImmutable($value))->getTimestamp());
    }

    public function testNearFuture(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\Iso8601Provider::nearFuture());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}:[0-9]{2}\+[0-9]{2}:[0-9]{2})/', $value);
        self::assertIsAfter('+2 days', (new \DateTimeImmutable($value))->getTimestamp());
        self::assertIsBefore('+1 week', (new \DateTimeImmutable($value))->getTimestamp());
    }

    public function testFuture(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\Iso8601Provider::future());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}:[0-9]{2}\+[0-9]{2}:[0-9]{2})/', $value);
        self::assertIsAfter('+1 week', (new \DateTimeImmutable($value))->getTimestamp());
        self::assertIsBefore('+1 year', (new \DateTimeImmutable($value))->getTimestamp());
    }

    public function testFarFuture(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\Iso8601Provider::farFuture());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}:[0-9]{2}\+[0-9]{2}:[0-9]{2})/', $value);
        self::assertIsAfter('+1 year', (new \DateTimeImmutable($value))->getTimestamp());
        self::assertIsBefore('+10 years', (new \DateTimeImmutable($value))->getTimestamp());
    }

    public function testVeryFarFuture(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\Iso8601Provider::veryFarFuture());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}:[0-9]{2}\+[0-9]{2}:[0-9]{2})/', $value);
        self::assertIsAfter('+10 years', (new \DateTimeImmutable($value))->getTimestamp());
        self::assertIsBefore('+100 years', (new \DateTimeImmutable($value))->getTimestamp());
    }

    public function testVeryNearHistory(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\Iso8601Provider::veryNearHistory());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}:[0-9]{2}\+[0-9]{2}:[0-9]{2})/', $value);
        self::assertIsBefore('-1 day', (new \DateTimeImmutable($value))->getTimestamp());
        self::assertIsAfter('-2 days', (new \DateTimeImmutable($value))->getTimestamp());
    }

    public function testNearHistory(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\Iso8601Provider::nearHistory());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}:[0-9]{2}\+[0-9]{2}:[0-9]{2})/', $value);
        self::assertIsBefore('-2 days', (new \DateTimeImmutable($value))->getTimestamp());
        self::assertIsAfter('-1 week', (new \DateTimeImmutable($value))->getTimestamp());
    }

    public function testHistory(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\Iso8601Provider::history());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}:[0-9]{2}\+[0-9]{2}:[0-9]{2})/', $value);
        self::assertIsBefore('-1 week', (new \DateTimeImmutable($value))->getTimestamp());
        self::assertIsAfter('-1 year', (new \DateTimeImmutable($value))->getTimestamp());
    }

    public function testFarHistory(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\Iso8601Provider::farHistory());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}:[0-9]{2}\+[0-9]{2}:[0-9]{2})/', $value);
        self::assertIsBefore('-1 year', (new \DateTimeImmutable($value))->getTimestamp());
        self::assertIsAfter('-10 years', (new \DateTimeImmutable($value))->getTimestamp());
    }

    public function testVeryFarHistory(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\Iso8601Provider::veryFarHistory());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}:[0-9]{2}\+[0-9]{2}:[0-9]{2})/', $value);
        self::assertIsBefore('-10 years', (new \DateTimeImmutable($value))->getTimestamp());
        self::assertIsAfter('-100 years', (new \DateTimeImmutable($value))->getTimestamp());
    }
}
