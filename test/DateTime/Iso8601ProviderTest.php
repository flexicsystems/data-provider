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
 * @covers \Flexic\DataProvider\DateTime\Iso8601Provider
 * @covers \Flexic\DataProvider\DateTime\AbstractDateProvider
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
        self::assertGreaterThan(
            (new \DateTimeImmutable('now'))->setTime(0, 0, 0)->getTimestamp(),
            (new \DateTimeImmutable($value))->getTimestamp(),
        );
    }

    public function testNearFuture(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\Iso8601Provider::nearFuture());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}:[0-9]{2}\+[0-9]{2}:[0-9]{2})/', $value);
        self::assertGreaterThan(
            (new \DateTimeImmutable('now'))->getTimestamp(),
            (new \DateTimeImmutable($value))->getTimestamp(),
        );
    }

    public function testFuture(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\Iso8601Provider::future());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}:[0-9]{2}\+[0-9]{2}:[0-9]{2})/', $value);
        self::assertGreaterThan(
            (new \DateTimeImmutable('now'))->getTimestamp(),
            (new \DateTimeImmutable($value))->getTimestamp(),
        );
    }

    public function testFarFuture(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\Iso8601Provider::farFuture());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}:[0-9]{2}\+[0-9]{2}:[0-9]{2})/', $value);
        self::assertGreaterThan(
            (new \DateTimeImmutable('now'))->getTimestamp(),
            (new \DateTimeImmutable($value))->getTimestamp(),
        );
    }

    public function testVeryNearHistory(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\Iso8601Provider::veryNearHistory());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}:[0-9]{2}\+[0-9]{2}:[0-9]{2})/', $value);
        self::assertLessThan(
            (new \DateTimeImmutable('now'))->setTime(0, 0, 0)->getTimestamp(),
            (new \DateTimeImmutable($value))->getTimestamp(),
        );
    }

    public function testNearHistory(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\Iso8601Provider::nearHistory());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}:[0-9]{2}\+[0-9]{2}:[0-9]{2})/', $value);
        self::assertLessThan(
            (new \DateTimeImmutable('now'))->getTimestamp(),
            (new \DateTimeImmutable($value))->getTimestamp(),
        );
    }

    public function testHistory(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\Iso8601Provider::history());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}:[0-9]{2}\+[0-9]{2}:[0-9]{2})/', $value);
        self::assertLessThan(
            (new \DateTimeImmutable('now'))->getTimestamp(),
            (new \DateTimeImmutable($value))->getTimestamp(),
        );
    }

    public function testFarHistory(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\Iso8601Provider::farHistory());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/([0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}:[0-9]{2}\+[0-9]{2}:[0-9]{2})/', $value);
        self::assertLessThan(
            (new \DateTimeImmutable('now'))->getTimestamp(),
            (new \DateTimeImmutable($value))->getTimestamp(),
        );
    }
}
