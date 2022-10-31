<?php

namespace Flexic\DataProvider\Test\DateTime;

use Flexic\DataProvider\Test\AbstractTestCase;
use Flexic\DataProvider\Test\TestUtil;

/**
 * @internal
 *
 * @covers \Flexic\DataProvider\DateTime\CenturyProvider
 */
class CenturyProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\DateTime\CenturyProvider::arbitrary());

        self::assertIsString($value);
        self::assertStringContainsOnly('/[A-Z]/', $value);
    }
}