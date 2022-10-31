<?php

namespace Flexic\DataProvider\Test\Security;

use Flexic\DataProvider\Test\AbstractTestCase;
use Flexic\DataProvider\Test\TestUtil;

/**
 * @internal
 *
 * @covers \Flexic\DataProvider\Security\UsernameProvider
 * @covers \Flexic\DataProvider\Generator\UsernameGenerator
 */
class UsernameProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Security\UsernameProvider::arbitrary());

        self::assertIsString($value);
        self::assertNotEmpty($value);
        self::assertStringContainsOnly('/[a-zA-Z0-9.-_]/', $value);
    }
}