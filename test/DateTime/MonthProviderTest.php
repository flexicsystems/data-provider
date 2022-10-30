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
 * @covers \Flexic\DataProvider\DateTime\MonthProvider
 */
final class MonthProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::int(\Flexic\DataProvider\DateTime\MonthProvider::arbitrary());

        self::assertIsInt($value);
        self::assertContains($value, \Flexic\DataProvider\DateTime\MonthProvider::values());
        self::assertGreaterThanOrEqual(1, $value);
        self::assertLessThanOrEqual(12, $value);
    }
}
