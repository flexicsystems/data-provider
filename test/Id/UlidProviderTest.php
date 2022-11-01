<?php

namespace Flexic\DataProvider\Test\Id;

use Flexic\DataProvider\Test\AbstractTestCase;
use Flexic\DataProvider\Test\TestUtil;

/**
 * @internal
 *
 * @covers \Flexic\DataProvider\Id\UlidProvider
 */
class UlidProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Id\UlidProvider::arbitrary());

        self::assertIsString($value);
        self::assertMatchesRegularExpression('/^([a-zA-Z0-9]{8}-[a-zA-Z0-9]{4}-[a-zA-Z0-9]{4}-[a-zA-Z0-9]{4}-[a-zA-Z0-9]{12})$/i', $value);
        self::assertStringContainsOnly('/[a-zA-Z0-9]/', $value);
    }
}