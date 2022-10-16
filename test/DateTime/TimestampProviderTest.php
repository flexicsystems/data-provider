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
 * @covers \Flexic\DataProvider\DateTime\TimestampProvider
 */
final class TimestampProviderTest extends AbstractTestCase
{
    public function testCurrentTimestamp(): void
    {
        $value = TestUtil::int(\Flexic\DataProvider\DateTime\TimestampProvider::current());

        self::assertTrue(true); // ToDo
    }

    public function testVeryNearFutureTimestamp(): void
    {
        $value = TestUtil::int(\Flexic\DataProvider\DateTime\TimestampProvider::veryNearFuture());
        $faker = \Faker\Factory::create();
        $expected = $faker->unixTime('now');
        self::assertGreaterThan($expected, $value);
    }
}
