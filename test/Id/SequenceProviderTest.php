<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider\Test\Id;

use Flexic\DataProvider\Test\AbstractTestCase;
use Flexic\DataProvider\Test\TestUtil;

/**
 * @internal
 *
 * @covers \Flexic\DataProvider\Id\SequenceProvider
 */
final class SequenceProviderTest extends AbstractTestCase
{
    public function testArbitrarySequence(): void
    {
        $value = TestUtil::array(\Flexic\DataProvider\Id\SequenceProvider::arbitrary());

        self::assertGreaterThanOrEqual(2, \count($value));
        self::assertLessThanOrEqual(100000, \count($value));
    }

    public function testShortSequence(): void
    {
        $value = TestUtil::array(\Flexic\DataProvider\Id\SequenceProvider::short());

        self::assertCount(10, $value);
        self::assertLessThanOrEqual(10, \count($value));
        self::assertArrayHasKeyBetween(0, 9, $value);
    }

    public function testLongSequence(): void
    {
        $value = TestUtil::array(\Flexic\DataProvider\Id\SequenceProvider::long());

        self::assertCount(1000, $value);
        self::assertLessThanOrEqual(1000, \count($value));
        self::assertArrayHasKeyBetween(0, 999, $value);
    }

    public function testExtraLongSequence(): void
    {
        $value = TestUtil::array(\Flexic\DataProvider\Id\SequenceProvider::extraLong());

        self::assertCount(100000, $value);
        self::assertLessThanOrEqual(100000, \count($value));
        self::assertArrayHasKeyBetween(0, 99999, $value);
    }
}
