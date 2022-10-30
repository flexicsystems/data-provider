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
 * @covers \Flexic\DataProvider\DateTime\TimeProvider
 */
final class TimeProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\TimeProvider::arbitrary());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/^\d{2}:\d{2}:\d{2}$/', $value);
        self::assertInstanceOf(\DateTimeImmutable::class, \DateTimeImmutable::createFromFormat('!H:i:s', $value));

        $blocks = \explode(':', $value);
        self::assertCount(3, $blocks);
        self::assertGreaterThanOrEqual(0, (int) $blocks[0]);
        self::assertLessThanOrEqual(23, (int) $blocks[0]);
        self::assertGreaterThanOrEqual(0, (int) $blocks[1]);
        self::assertLessThanOrEqual(59, (int) $blocks[1]);
        self::assertGreaterThanOrEqual(0, (int) $blocks[2]);
        self::assertLessThanOrEqual(59, (int) $blocks[2]);
    }

    public function testNow(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\TimeProvider::now());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/^\d{2}:\d{2}:\d{2}$/', $value);
        $dateTime = \DateTimeImmutable::createFromFormat('!H:i:s', $value);
        self::assertInstanceOf(\DateTimeImmutable::class, $dateTime);
        self::assertEqualsWithDelta(
            (new \DateTimeImmutable('now'))->setDate(1970, 1, 1)->getTimestamp(),
            $dateTime->getTimestamp(),
            1,
        );
    }

    public function testBeforeNow(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\TimeProvider::beforeNow());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/^\d{2}:\d{2}:\d{2}$/', $value);
        $dateTime = \DateTimeImmutable::createFromFormat('!H:i:s', $value);
        self::assertInstanceOf(\DateTimeImmutable::class, $dateTime);
        self::assertLessThanOrEqual(
            (new \DateTimeImmutable('now'))->setDate(1970, 1, 1)->getTimestamp(),
            $dateTime->getTimestamp(),
        );
    }

    public function testAfterNow(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\TimeProvider::afterNow());

        self::assertNotEmpty($value);
        self::assertMatchesRegularExpression('/^\d{2}:\d{2}:\d{2}$/', $value);
        $dateTime = \DateTimeImmutable::createFromFormat('!H:i:s', $value);
        self::assertInstanceOf(\DateTimeImmutable::class, $dateTime);
        self::assertGreaterThanOrEqual(
            (new \DateTimeImmutable('now'))->setDate(1970, 1, 1)->setTime(0, 0, 0)->getTimestamp(),
            $dateTime->getTimestamp(),
        );
    }
}
