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
 * @covers \Flexic\DataProvider\Internet\ProtocolProvider
 */
final class ProtocolProviderTest extends AbstractTestCase
{
    public function testArbitrary(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\ProtocolProvider::arbitrary());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertLessThanOrEqual(5, \strlen($value));
        self::assertGreaterThanOrEqual(3, \strlen($value));
        self::assertStringContainsOnly('/[a-zA-Z0-9]/', $value);
    }

    public function testHttp(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\ProtocolProvider::http());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertLessThanOrEqual(5, \strlen($value));
        self::assertGreaterThanOrEqual(3, \strlen($value));
        self::assertStringContainsOnly('/[a-zA-Z0-9]/', $value);
    }

    public function testShell(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\ProtocolProvider::shell());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertLessThanOrEqual(5, \strlen($value));
        self::assertGreaterThanOrEqual(3, \strlen($value));
        self::assertStringContainsOnly('/[a-zA-Z0-9]/', $value);
    }

    public function testFile(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\ProtocolProvider::file());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertLessThanOrEqual(5, \strlen($value));
        self::assertGreaterThanOrEqual(3, \strlen($value));
        self::assertStringContainsOnly('/[a-zA-Z0-9]/', $value);
    }

    public function testMail(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\ProtocolProvider::mail());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertLessThanOrEqual(5, \strlen($value));
        self::assertGreaterThanOrEqual(3, \strlen($value));
        self::assertStringContainsOnly('/[a-zA-Z0-9]/', $value);
    }

    public function testIp(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\ProtocolProvider::ip());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertLessThanOrEqual(5, \strlen($value));
        self::assertGreaterThanOrEqual(2, \strlen($value));
        self::assertStringContainsOnly('/[a-zA-Z0-9]/', $value);
    }

    public function testSecurity(): void
    {
        $value = TestUtil::string(\Flexic\DataProvider\Internet\ProtocolProvider::security());

        self::assertNotEmpty($value);
        self::assertIsString($value);
        self::assertLessThanOrEqual(5, \strlen($value));
        self::assertGreaterThanOrEqual(3, \strlen($value));
        self::assertStringContainsOnly('/[a-zA-Z0-9]/', $value);
    }
}
