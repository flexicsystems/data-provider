<?php

namespace Flexic\DataProvider\Test\DateTime;

use Flexic\DataProvider\Test\AbstractTestCase;
use Flexic\DataProvider\Test\TestUtil;

/**
 * @internal
 *
 * @covers \Flexic\DataProvider\DateTime\TimestampProvider
 */
class TimestampProviderTest extends AbstractTestCase
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