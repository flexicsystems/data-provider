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
 * @covers \Flexic\DataProvider\DateTime\RssDateProvider
 */
final class RssDateProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\RssDateProvider::arbitrary());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([a-zA-Z]+, [0-9]{2} [a-zA-Z]+ [0-9]{4} [0-9]{2}:[0-9]{2}:[0-9]{2} \+[0-9]+)/', $value);
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat(\DateTime::RSS, $value));
    }

    public function testNow(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\RssDateProvider::now());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([a-zA-Z]+, [0-9]{2} [a-zA-Z]+ [0-9]{4} [0-9]{2}:[0-9]{2}:[0-9]{2} \+[0-9]+)/', $value);
        self::assertSame((new \DateTimeImmutable('now'))->format(\DateTime::RSS), $value);
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat(\DateTime::RSS, $value));
    }

    public function testVeryNearFuture(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\RssDateProvider::veryNearFuture());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([a-zA-Z]+, [0-9]{2} [a-zA-Z]+ [0-9]{4} [0-9]{2}:[0-9]{2}:[0-9]{2} \+[0-9]+)/', $value);
        self::assertIsAfter('+1 day', \DateTimeImmutable::createFromFormat(\DateTime::RSS, $value)->getTimestamp());
        self::assertIsBefore('+2 days', \DateTimeImmutable::createFromFormat(\DateTime::RSS, $value)->getTimestamp());
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat(\DateTime::RSS, $value));
    }

    public function testNearFuture(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\RssDateProvider::nearFuture());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([a-zA-Z]+, [0-9]{2} [a-zA-Z]+ [0-9]{4} [0-9]{2}:[0-9]{2}:[0-9]{2} \+[0-9]+)/', $value);
        self::assertIsAfter('+2 days', \DateTimeImmutable::createFromFormat(\DateTime::RSS, $value)->getTimestamp());
        self::assertIsBefore('+1 week', \DateTimeImmutable::createFromFormat(\DateTime::RSS, $value)->getTimestamp());
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat(\DateTime::RSS, $value));
    }

    public function testFuture(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\RssDateProvider::future());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([a-zA-Z]+, [0-9]{2} [a-zA-Z]+ [0-9]{4} [0-9]{2}:[0-9]{2}:[0-9]{2} \+[0-9]+)/', $value);
        self::assertIsAfter('+1 week', \DateTimeImmutable::createFromFormat(\DateTime::RSS, $value)->getTimestamp());
        self::assertIsBefore('+1 year', \DateTimeImmutable::createFromFormat(\DateTime::RSS, $value)->getTimestamp());
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat(\DateTime::RSS, $value));
    }

    public function testFarFuture(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\RssDateProvider::farFuture());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([a-zA-Z]+, [0-9]{2} [a-zA-Z]+ [0-9]{4} [0-9]{2}:[0-9]{2}:[0-9]{2} \+[0-9]+)/', $value);
        self::assertIsAfter('+1 year', \DateTimeImmutable::createFromFormat(\DateTime::RSS, $value)->getTimestamp());
        self::assertIsBefore('+10 years', \DateTimeImmutable::createFromFormat(\DateTime::RSS, $value)->getTimestamp());
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat(\DateTime::RSS, $value));
    }

    public function testVeryFarFuture(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\RssDateProvider::veryFarFuture());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([a-zA-Z]+, [0-9]{2} [a-zA-Z]+ [0-9]{4} [0-9]{2}:[0-9]{2}:[0-9]{2} \+[0-9]+)/', $value);
        self::assertIsAfter('+10 years', \DateTimeImmutable::createFromFormat(\DateTime::RSS, $value)->getTimestamp());
        self::assertIsBefore('+100 years', \DateTimeImmutable::createFromFormat(\DateTime::RSS, $value)->getTimestamp());
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat(\DateTime::RSS, $value));
    }

    public function testVeryNearHistory(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\RssDateProvider::veryNearHistory());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([a-zA-Z]+, [0-9]{2} [a-zA-Z]+ [0-9]{4} [0-9]{2}:[0-9]{2}:[0-9]{2} \+[0-9]+)/', $value);
        self::assertIsBefore('-1 day', \DateTimeImmutable::createFromFormat(\DateTime::RSS, $value)->getTimestamp());
        self::assertIsAfter('-2 days', \DateTimeImmutable::createFromFormat(\DateTime::RSS, $value)->getTimestamp());
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat(\DateTime::RSS, $value));
    }

    public function testNearHistory(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\RssDateProvider::nearHistory());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([a-zA-Z]+, [0-9]{2} [a-zA-Z]+ [0-9]{4} [0-9]{2}:[0-9]{2}:[0-9]{2} \+[0-9]+)/', $value);
        self::assertIsBefore('-2 days', \DateTimeImmutable::createFromFormat(\DateTime::RSS, $value)->getTimestamp());
        self::assertIsAfter('-1 week', \DateTimeImmutable::createFromFormat(\DateTime::RSS, $value)->getTimestamp());
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat(\DateTime::RSS, $value));
    }

    public function testHistory(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\RssDateProvider::history());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([a-zA-Z]+, [0-9]{2} [a-zA-Z]+ [0-9]{4} [0-9]{2}:[0-9]{2}:[0-9]{2} \+[0-9]+)/', $value);
        self::assertIsBefore('-1 week', \DateTimeImmutable::createFromFormat(\DateTime::RSS, $value)->getTimestamp());
        self::assertIsAfter('-1 year', \DateTimeImmutable::createFromFormat(\DateTime::RSS, $value)->getTimestamp());
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat(\DateTime::RSS, $value));
    }

    public function testFarHistory(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\RssDateProvider::farHistory());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([a-zA-Z]+, [0-9]{2} [a-zA-Z]+ [0-9]{4} [0-9]{2}:[0-9]{2}:[0-9]{2} \+[0-9]+)/', $value);
        self::assertIsBefore('-1 year', \DateTimeImmutable::createFromFormat(\DateTime::RSS, $value)->getTimestamp());
        self::assertIsAfter('-10 years', \DateTimeImmutable::createFromFormat(\DateTime::RSS, $value)->getTimestamp());
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat(\DateTime::RSS, $value));
    }

    public function testVeryFarHistory(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\RssDateProvider::veryFarHistory());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([a-zA-Z]+, [0-9]{2} [a-zA-Z]+ [0-9]{4} [0-9]{2}:[0-9]{2}:[0-9]{2} \+[0-9]+)/', $value);
        self::assertIsBefore('-10 years', \DateTimeImmutable::createFromFormat(\DateTime::RSS, $value)->getTimestamp());
        self::assertIsAfter('-100 years', \DateTimeImmutable::createFromFormat(\DateTime::RSS, $value)->getTimestamp());
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat(\DateTime::RSS, $value));
    }
}
