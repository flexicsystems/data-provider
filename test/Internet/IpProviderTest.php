<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022-2022 Flexic-Systems
 *
 * @author Hendrik Legge <hendrik.legge@themepoint.de>
 *
 * @version 1.0.0
 */

namespace Flexic\DataProvider\Test\Internet;

use Flexic\DataProvider\Test\AbstractTestCase;
use Flexic\DataProvider\Test\TestUtil;

/**
 * @internal
 *
 * @covers \Flexic\DataProvider\Internet\IpProvider
 */
final class IpProviderTest extends AbstractTestCase
{
    public function testIpv4(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\IpProvider::ipv4());

        self::assertIsString($value);
        self::assertMatchesRegularExpression('/^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}$/', $value);
        self::assertCount(4, \explode('.', $value));
    }

    public function testLocalIpv4(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\IpProvider::localIpv4());

        self::assertIsString($value);
        self::assertMatchesRegularExpression('/^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}$/', $value);
        self::assertCount(4, \explode('.', $value));
    }

    public function testIpv6(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\IpProvider::ipv6());

        self::assertIsString($value);
        self::assertMatchesRegularExpression('/^([0-9a-f]{1,4}:){7}[0-9a-f]{1,4}$/', $value);
        self::assertCount(8, \explode(':', $value));
    }

    public function testMacAddress(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\IpProvider::macAddress());

        self::assertIsString($value);
        self::assertMatchesRegularExpression('/^(([A-Z0-9]{2}):([A-Z0-9]{2}):([A-Z0-9]{2}):([A-Z0-9]{2}):([A-Z0-9]{2}):([A-Z0-9]{2}))$/', $value);
        self::assertCount(6, \explode(':', $value));
    }
}
