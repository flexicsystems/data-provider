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
 * @covers \Flexic\DataProvider\DateTime\Rfc3339ExtendedProvider
 */
final class Rfc3339ExtendedProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\Rfc3339ExtendedProvider::arbitrary());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}:[0-9]{2}.[0-9]{3}\+[0-9]{2}:[0-9]{2})/', $value);
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat(\DateTime::RFC3339_EXTENDED, $value));
    }

    public function testNow(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\Rfc3339ExtendedProvider::now());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}:[0-9]{2}.[0-9]{3}\+[0-9]{2}:[0-9]{2})/', $value);
        self::assertSame((new \DateTimeImmutable('now'))->format(\DateTime::RFC3339_EXTENDED), $value);
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat(\DateTime::RFC3339_EXTENDED, $value));
    }

    public function testVeryNearFuture(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\Rfc3339ExtendedProvider::veryNearFuture());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}:[0-9]{2}.[0-9]{3}\+[0-9]{2}:[0-9]{2})/', $value);
        self::assertIsAfter('+1 day', \DateTimeImmutable::createFromFormat(\DateTime::RFC3339_EXTENDED, $value)->getTimestamp());
        self::assertIsBefore('+2 days', \DateTimeImmutable::createFromFormat(\DateTime::RFC3339_EXTENDED, $value)->getTimestamp());
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat(\DateTime::RFC3339_EXTENDED, $value));
    }

    public function testNearFuture(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\Rfc3339ExtendedProvider::nearFuture());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}:[0-9]{2}.[0-9]{3}\+[0-9]{2}:[0-9]{2})/', $value);
        self::assertIsAfter('+2 days', \DateTimeImmutable::createFromFormat(\DateTime::RFC3339_EXTENDED, $value)->getTimestamp());
        self::assertIsBefore('+1 week', \DateTimeImmutable::createFromFormat(\DateTime::RFC3339_EXTENDED, $value)->getTimestamp());
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat(\DateTime::RFC3339_EXTENDED, $value));
    }

    public function testFuture(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\Rfc3339ExtendedProvider::future());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}:[0-9]{2}.[0-9]{3}\+[0-9]{2}:[0-9]{2})/', $value);
        self::assertIsAfter('+1 week', \DateTimeImmutable::createFromFormat(\DateTime::RFC3339_EXTENDED, $value)->getTimestamp());
        self::assertIsBefore('+1 year', \DateTimeImmutable::createFromFormat(\DateTime::RFC3339_EXTENDED, $value)->getTimestamp());
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat(\DateTime::RFC3339_EXTENDED, $value));
    }

    public function testFarFuture(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\Rfc3339ExtendedProvider::farFuture());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}:[0-9]{2}.[0-9]{3}\+[0-9]{2}:[0-9]{2})/', $value);
        self::assertIsAfter('+1 year', \DateTimeImmutable::createFromFormat(\DateTime::RFC3339_EXTENDED, $value)->getTimestamp());
        self::assertIsBefore('+10 years', \DateTimeImmutable::createFromFormat(\DateTime::RFC3339_EXTENDED, $value)->getTimestamp());
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat(\DateTime::RFC3339_EXTENDED, $value));
    }

    public function testVeryFarFuture(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\Rfc3339ExtendedProvider::veryFarFuture());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}:[0-9]{2}.[0-9]{3}\+[0-9]{2}:[0-9]{2})/', $value);
        self::assertIsAfter('+10 years', \DateTimeImmutable::createFromFormat(\DateTime::RFC3339_EXTENDED, $value)->getTimestamp());
        self::assertIsBefore('+100 years', \DateTimeImmutable::createFromFormat(\DateTime::RFC3339_EXTENDED, $value)->getTimestamp());
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat(\DateTime::RFC3339_EXTENDED, $value));
    }

    public function testVeryNearHistory(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\Rfc3339ExtendedProvider::veryNearHistory());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}:[0-9]{2}.[0-9]{3}\+[0-9]{2}:[0-9]{2})/', $value);
        self::assertIsBefore('-1 day', \DateTimeImmutable::createFromFormat(\DateTime::RFC3339_EXTENDED, $value)->getTimestamp());
        self::assertIsAfter('-2 days', \DateTimeImmutable::createFromFormat(\DateTime::RFC3339_EXTENDED, $value)->getTimestamp());
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat(\DateTime::RFC3339_EXTENDED, $value));
    }

    public function testNearHistory(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\Rfc3339ExtendedProvider::nearHistory());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}:[0-9]{2}.[0-9]{3}\+[0-9]{2}:[0-9]{2})/', $value);
        self::assertIsBefore('-2 days', \DateTimeImmutable::createFromFormat(\DateTime::RFC3339_EXTENDED, $value)->getTimestamp());
        self::assertIsAfter('-1 week', \DateTimeImmutable::createFromFormat(\DateTime::RFC3339_EXTENDED, $value)->getTimestamp());
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat(\DateTime::RFC3339_EXTENDED, $value));
    }

    public function testHistory(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\Rfc3339ExtendedProvider::history());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}:[0-9]{2}.[0-9]{3}\+[0-9]{2}:[0-9]{2})/', $value);
        self::assertIsBefore('-1 week', \DateTimeImmutable::createFromFormat(\DateTime::RFC3339_EXTENDED, $value)->getTimestamp());
        self::assertIsAfter('-1 year', \DateTimeImmutable::createFromFormat(\DateTime::RFC3339_EXTENDED, $value)->getTimestamp());
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat(\DateTime::RFC3339_EXTENDED, $value));
    }

    public function testFarHistory(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\Rfc3339ExtendedProvider::farHistory());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}:[0-9]{2}.[0-9]{3}\+[0-9]{2}:[0-9]{2})/', $value);
        self::assertIsBefore('-1 year', \DateTimeImmutable::createFromFormat(\DateTime::RFC3339_EXTENDED, $value)->getTimestamp());
        self::assertIsAfter('-10 years', \DateTimeImmutable::createFromFormat(\DateTime::RFC3339_EXTENDED, $value)->getTimestamp());
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat(\DateTime::RFC3339_EXTENDED, $value));
    }

    public function testVeryFarHistory(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\Rfc3339ExtendedProvider::veryFarHistory());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}:[0-9]{2}.[0-9]{3}\+[0-9]{2}:[0-9]{2})/', $value);
        self::assertIsBefore('-10 years', \DateTimeImmutable::createFromFormat(\DateTime::RFC3339_EXTENDED, $value)->getTimestamp());
        self::assertIsAfter('-100 years', \DateTimeImmutable::createFromFormat(\DateTime::RFC3339_EXTENDED, $value)->getTimestamp());
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat(\DateTime::RFC3339_EXTENDED, $value));
    }
}
