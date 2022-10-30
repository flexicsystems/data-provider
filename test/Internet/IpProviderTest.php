<?php

namespace Flexic\DataProvider\Test\Internet;

use Flexic\DataProvider\Test\AbstractTestCase;
use Flexic\DataProvider\Test\TestUtil;

/**
 * @internal
 *
 * @covers \Flexic\DataProvider\Internet\IpProvider
 */
class IpProviderTest extends AbstractTestCase
{
    public function testIpv4()
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\IpProvider::ipv4());

        self::assertIsString($value);
        self::assertMatchesRegularExpression('/^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}$/', $value);
        self::assertCount(4, explode('.', $value));
    }

    public function testLocalIpv4()
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\IpProvider::localIpv4());

        self::assertIsString($value);
        self::assertMatchesRegularExpression('/^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}$/', $value);
        self::assertCount(4, explode('.', $value));
    }

    public function testIpv6()
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\IpProvider::ipv6());

        self::assertIsString($value);
        self::assertMatchesRegularExpression('/^([0-9a-f]{1,4}:){7}[0-9a-f]{1,4}$/', $value);
        self::assertCount(8, explode(':', $value));
    }

    public function testMacAddress()
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\IpProvider::macAddress());

        self::assertIsString($value);
        self::assertMatchesRegularExpression('/^(([A-Z0-9]{2}):([A-Z0-9]{2}):([A-Z0-9]{2}):([A-Z0-9]{2}):([A-Z0-9]{2}):([A-Z0-9]{2}))$/', $value);
        self::assertCount(6, explode(':', $value));
    }
}