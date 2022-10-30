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
 * @covers \Flexic\DataProvider\DateTime\YearProvider
 */
final class YearProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::int(\Flexic\DataProvider\DateTime\YearProvider::arbitrary());

        self::assertIsInt($value);
    }

    public function testCurrent(): void
    {
        $value = TestUtil::int(\Flexic\DataProvider\DateTime\YearProvider::current());

        self::assertIsInt($value);
        self::assertSame((int) (new \DateTimeImmutable('now'))->format('Y'), $value);
    }

    public function testNext(): void
    {
        $value = TestUtil::int(\Flexic\DataProvider\DateTime\YearProvider::next());

        self::assertIsInt($value);
        self::assertSame((int) (new \DateTimeImmutable('now'))->modify('+1 year')->format('Y'), $value);
    }

    public function testPrevious(): void
    {
        $value = TestUtil::int(\Flexic\DataProvider\DateTime\YearProvider::previous());

        self::assertIsInt($value);
        self::assertSame((int) (new \DateTimeImmutable('now'))->modify('-1 year')->format('Y'), $value);
    }
}
